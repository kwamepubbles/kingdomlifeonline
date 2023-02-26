<?php

function time_elapsed_string($datetime, $full = false)
{

    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);
    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;
    $string = array(
        'y' => 'year', 'm' => 'month', 'W' => ' week', 'd' => 'day',
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
function show_comments($comments, $filters, $parent_id = -1){
  $html = '';
  if($parent_id != -1){
    array_multisort(array_column($comments, 'submit_date'), SORT_ASC, $comments);
   }//End of if
    foreach ($comments as $comment) {
        if ($comment ['parent_id'] == $parent_id) {
            $html .= show_comment($comment, $comments, $filters);
        }
    }//End of foreach
    return $html;
}//End of function
