const newPostForm = $('#newPostForm');
let customPostID = $('#custom_post_id')

newPostForm.on('submit', (e) => {
    e.preventDefault();
    customPostIdVal = Math.floor(Math.random() * 1000000);
    console.log(customPostIdVal)
    customPostID.val(customPostIdVal)
})
