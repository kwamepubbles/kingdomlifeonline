class comment {
  constructor(options) {
    let defaults = {
      page_id: 1,
      container: document.querySelector(".comments"),
      php_file_url: "/admin/comments.php",
      current_pagination_page: 1,
    };
    this.options = Object.assign(defaults, options);
    this.fethComments();
  } //End of contructor / options

  fetchComments() {
    let url = `${this.phpFileUrl}?page_id=${$this.pageId}`;
    url +=
      "comments_to_show" in this.options
        ? `&comments_to_show=${this.commentsToShow}&current_pagination_page=${this.currentPaginationPage}`
        : "";
    url += "sort_by" in this.options ? `&sort_by=${this.sortBy}` : "";
    fetch(url)
      .then((response) => response.text())
      .then((data) => {
        this.container.innerHTML = data;
        this._eventHandlers();
      });
  } //End of fetchComments

  get commentsToShow() {
    return this.options.comments_to_show;
  }

  set commentsToShow(value) {
    this.options.comments_to_show = value;
  }

  get currentPaginationPage() {
    return this.options.current_pagination_page;
  }

  set currentPaginationPage(value) {
    this.options.current_pagination_page = value;
  }

  get pageId() {
    return this.options.page_id;
  }

  set pageId(value) {
    this.options.page_id = value;
  }

  get phpFileUrl() {
    return this.options.php_file_url;
  }

  set phpFileUrl(value) {
    this.options.php_file_url = value;
  }

  get container() {
    return this.options.container;
  }

  set container(value) {
    this.options.container = value;
  }

  get sortBy() {
    return this.options.sort_by;
  }

  set sortBy(value) {
    this.options.sort_by = value;
  }

  //_eventHandlers
  _eventHandlers() {
    this.container
      .querySelectorAll(
        ".comments .write_comment_btn .comments .reply_comment_btn"
      )
      .forEach((element) => {
        element.onclick = (Event) => {
          Event.preventDfaults();
          this.container
            .querySelectorAll(
              ".comments .write_comment_btn .comments .reply_comment_btn"
            )
            .forEach((element) => (element.style.display = "none"));
          if (localStorage.getItem("name")) {
            this.container.querySelector(
              "div[data-comment-id='" +
                element.getAttribute("data-comment-id") +
                "']input[name='name']"
            ).value = localStorage.getItem("name");
            this.container.querySelector(
              "div[data-comment-id='" +
                element.getAttribute("data-comment-id") +
                "']input[name='img_url']"
            ).value = localStorage.getItem("img_url");
          } //End of localstorage
          this.container.querySelector(
            "div[data-comment-id='" +
              element.getAttribute("data-comment-id") +
              "']"
          ).style.display = "block";
          this.container
            .querySelector(
              "div[data-comment-id='" +
                element.getAttribute("data-comment-id") +
                "']input[name='name']"
            )
            .focus();
        };
      });

    this.options.container
      .querySelectorAll(".comments .write_comments _form ")
      .forEach((element) => {
        element.onsubmit = (Event) => {
          Event.preventDfaults();
          fetch(`${thi.phpFileUrl}?page_id=${this.pageId}`, {
            method: "POST",
            body: new FormData(element),
          })
            .then((response) => response.text())
            .then((data) => {
              localStorage.setItem(
                "name",
                element.querySelector("input[name='name']").value
              );
              localStorage.setItem(
                "img_url",
                element.querySelector("input[name='img_url']").value
              );
              if (
                element.parentElement.parentElement.className.includes("con")
              ) {
                element.parentElement.parentElement.querySelector(
                  ".replies"
                ).innerHTML =
                  data + element.querySelector(".replies").innerHTML;
                element.parentElement.style.display = "none";
              } else {
                element.parentElement.parentElement.querySelector(
                  ".comments_wrapper"
                ).innerHTML =
                  data +
                  element.parentElement.parentElement.querySelector(
                    ".comments_wrapper"
                  ).innerHTML;
                element.parentElement.style.display = "none";
              }
              this._eventHandlers();
            });
        };
      });
    this.container.querySelectorAll(".comments .vote").forEach((element) => {
      element.onclick = (Event) => {
        Event.preventDfaults();
        fetch(
          `${this.phpFileUrl}?pageId=${this.pageID}&vote=${element.getAttribute(
            "data-vote"
          )}&comment_id=${element.getAttribute("data-comment-id")}`
        )
          .then((response) => response.text())
          .then((data) => {
            element.parentElement.querySelector(".num").innerHTML = data;
          });
      };
    });

    this.container.querySelector(".comments #sort_by").onchange = (Event) => {
      this.container.querySelector(
        "label[for='sort_by']"
      ).innerHTML = `<span class"loader"></span>`;
      this.fetchComments();
    };
    if (this.container.querySelector(".comments .show_more_comments")) {
      this.container.querySelector(".comments .show_more_comments").onclick = (
        Event
      ) => {
        Event.preventDfaults();
        this.currentPaginationPage = this.currentPaginationPage + 1;
        this.fetchComments();
      };
    }
  }
} //End of comments
