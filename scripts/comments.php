<?php
include('db.config.php');
function time_elapsed_string($datetime, $full = false)
{

    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);
    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;
    $string = array(
        'y' => 'year', 'm' => 'month', 'w' => ' week', 'd' => 'day',
        'h' => 'hour', 'i' => 'minute', 's' => 'second'
    );

    foreach ($string as $k => &$v) {
        if ($diff->$K) {
            $v = $k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$K]);
        }
    }
    //End of foreach
    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . 'ago' : 'just now';
}


function show_comment($comment, $comments = [], $filters = [])
{
    //convert new lines
    $content = n12br(htmlspecialchars($comment['content'], ENT_QUOTES));
    //ALLowed html tags
    $content = str_ireplace(
        [
            '&lt;i&gt;', '&lt;/i&gt', '&lt;b&gt;', '&lt;u&gt;', '&lt;/u&gt;',
            '&lt;/u&gt;', '&1t;code&gt;', '&lt; code&gt;', '&lt;pre&gt;',
            '&lt;/pre&gt; '
        ],
        [
            '<i>', '</i>', '<b>', '</b>', '<u>', '</u>', '<code>', '</code>',
            '<pre>', '</pre>'
        ],
        $content
    );

    // Apply the filters
    if ($filters) {
        $content = str_ireplace(array_column($filters, 'word'), array_column($filters, 'replacement'), $content);
    }

    //comment template
    $html = '
        <div class="comment">
            <div class="img">
                <img src="' . (!empty($comment['img']) ? htmlspecialchars($comment['img'], ENT_QUOTES) : DEFAULT_PROFILE_IMAGE) . 'width="48" height="88" alt="Comment Profile Image">
            </div>

            <div class="con">
                <div>
                    <h3 class="name">' . htmlspecialchars($comment['name'], ENT_QUOTES) . '</h3>
                    <span class="date">' . time_elapsed_string($comment['submit_date']) . '</span>
                </div>

                <р class="coment_content">
                    ' . $content . '
                    ' . ($comment['approved'] ? '' :  '<br><br><i>(Awaiting approval)</i>') . '
                </p>

                <div class="comment_footer">
                    <span class="num">' . $comment['votes'] . '</span>
                    <a href="#" class="vote" data-vote="up" data-comment-id="' . $comment['id'] . '">
                    <i class="icon-thumbs-up"></i>
                    </a>
                    <a href="#" class="vote" data-vote="down" data-comment-id="' . $comment['id'] . '">
                    <i class="icon-thumbs-down"></i>
                    </a>
                    <a class="reply_comment_btn" href="#" data-comment-id="' . $comment['id'] . '">
                    Reply</a>
                </div>

                ' . show_write_comment_form($comment['id']) . '
                <div class="replies">
                    ' . show_comments($comments, $filters, $comment['id']) . '
                </div>

            </div>

        </div>';
    return $html;
}

//
function show_comments($comments, $filters, $parent_id = -1)
{
    $html = '';
    if ($parent_id != -1) {
        array_multisort(array_column($comments, 'submit_date'), SORT_ASC, $comments);
    } //End of if
    foreach ($comments as $comment) {
        if ($comment['parent_id'] == $parent_id) {
            $html .= show_comment($comment, $comments, $filters);
        }
    } //End of foreach
    return $html;
} //End of function

function show_write_comment_form($parent_id = -1)
{
    $html = '
       <div class="write_comment" data-comment-id="' .  $parent_id . '"
            <form>
                <input name="parent_id" type= "hidden" value="' . $parent_id . '">
                <input name="name" type="text" placeholder= "Your Name" required>
                <textarea name="content" placeholder="Write your comment here..." required</textarea>
                <input name="img_url" type="file" placeholder="(optional)">
                <button type="submit">Submit</button>
            </form>
       </div>';
    return $html;
} //End of function 

// Page ID
//Retrieve the $filters
$stmt = $plug->prepare('SELECT * FROM filters');
$stmt->execute();
$filters = $stmt->fetchAll(PDO::FETCH_ASSOC);
//
if (isset($_POST['name'], $_POST['content'], $_POST['parent_id'], $_POST['img_url'])) {

    //Insert a new comment
    $stmt = $plug->prepare('INSERT INTO comments (page_id, parent_id, name, content,
       submit_date, img, comments_approval_required) VALUES (?,?,?,?,NOW(),?,?)');
    $approved = COMMENTS_APPROVAL_REQUIRED ? 0 : 1;
    $stmt->execute([$_GET['page_id'], $_POST['parent_id'], $_POST['name'], $_POST['content'], $_POST['img_url'], $approved]);

    //Retrieve the comment
    $stmt = $plug->prepare('SELECT * FROM comments WHERE id = ?');
    $stmt->execute([$plug->lastInsertId()]);
    $comment = $stmt->fetch(PDO::FETCH_ASSOC);

    //Output the comment
    exit(show_comment($comment));
}

//Vote buttons
if (isset($_GET['vote'], $_GET['comment_id'])) {
    $stmt = $plug->prepare('UPDATE comments SET votes = votes + 1 WHERE id = ?');
    //cookie exists for this comment
    if (!isset($_COOKIE['vote_' . $_GET['comment_id']])) {
        $stmt = $plug->prepare('UPDATE comments SET votes = votes' . ($_GET['vote'] == 'up' ? '+' : '-') . ' 1 WHERE id = ?');
        $stmt->execute([$_GET['comment_id']]);
        //Set cookie to prevent users from voting multiple times
        setcookie('vote_' . $_GET['comments_id'], 'true', time() + (10 * 365 * 24 * 60 * 60), '/');
    } //End of cookie
    //Retrieve the number of vote
    $stmt = $plug->prepare('SELECT votes FROM comments WHERE id ');
    $stmt->execute([$_GET['comment_id']]);
    $comment = $stmt->fetch(PDO::FETCH_ASSOC);
    //Output the votes
    exit($comment['votes']);
}

//
$comments_per_pagination_page = isset($_GET['comments_to_show']) ? $_GET['comments_to_show'] : 30;
$limit = isset($_GET['current_pagination_page']) ? 'LIMIT :current_pagination_page' : '';
//
$sort_by = 'ORDER BY votes DESC, submit_date DESC';
if (isset($_GET['sort_by'])) {
    //User has changed the sort by
    $sort_by = $_GET['sort_by'] == 'newest' ? 'ORDER BY submit_date DESC' : $sort_by;
    $sort_by = $_GET['sort_by'] == 'oldest' ? 'ORDER BY submit_date ASC' : $sort_by;
    $sort_by = $_GET['sort_by'] == 'Votes' ? 'ORDER BY submit_date DESC, submit_date DESC' : $sort_by;
}

//Get all comments by the page Id
$stmt->$plug->prepare('SELECT * FROM comments WHERE page_id = :page_id AND approved = 1' . $sort_by . ' ' . $limit);
if ($limit) {
    $stmt->bindValue(':current_pagination_page', (int)$_GET['current_pagination_page'] * (int)$comments_per_pagination_page, PDO::PARAM_INT);

    //bIND THE PAGE ID TO OUR QUERY
    $stmt->bindvalue('page_id', $_GET['page_id'], PDO::PARAM_INT);
    $stmt->execute();
    $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //Get total number of comments
    $stmt = $plug->prepare('SELECT COUNT(*) AS total_comments FROM comments WHERE page_id = ? AND approved = 1');
    $stmt->execute([$_GET['page_id']]);
    $comments_info = $stmt->fetch(PDO::FETCH_ASSOC);
} else {
    exit('No page ID specified!');
}

?>
<!--End of php -->
<div class="comment_header">
    <span class="total"><?= $comments_info['total_comments'] ?> comments</span>
    <form>
        <label for="sort_by"></label>
        <select name="sort_by" id="sort_by">
            <option value="" disabled<?= !isset($_GET['sort_by']) ? 'selected' : '' ?>>Sort By</option>
            <option value="votes" <?= isset($_GET['sort_by']) && $_GET['sort_by'] == 'votes' ? 'selected' : '' ?>>Votes</option>
            <option value="newest" <?= isset($_GET['sort_by']) && $_GET['sort_by'] == 'newest' ? 'selected' : '' ?>>Newest</option>
            <option value="oldest" <?= isset($_GET['sort_by']) && $_GET['sort_by'] == 'oldest' ? 'selected' : '' ?>>Oldest</option>
        </select>
    </form>
    <a href="#" class="write_comment_btn" data-comment-id="-1">Write Comment</a>
</div>

<?= show_write_comment_form() ?>

<div class="comments_wrapper">
    <?= show_comments($comments, $filters) ?>
</div>

<?php if (count($comments) < $comments_info['total_comments']) : ?>
    <a href="#" class="show_more_comments">Show More</a>
<?php endif; ?>