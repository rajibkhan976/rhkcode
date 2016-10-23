<ul class="nav nav-pills nav-justified">
<li><a href="#adminAddPost" data-toggle="modal">New Posts</a></li>
<li><a href="#">Manage user</a></li>
<li><a href="#">Manage comments</a></li>
<li><a href="#">Manage category</a></li>
<li><a href="#"><?php echo $_SESSION['adminscrnam'];  ?></a></li>
<li><a href="logoutAction.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
</ul>
<!--Post Modal-->
<div class="modal fade" id="adminAddPost" role="dialog"  aria-labelledby="adminPostLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h3 class="modal-title" id="adminPostLabel">Add new post</h3>
</div>
<div class="modal-body">
<form action="#" method="post" enctype="multipart/form-data">
<div class="form-group">
<label for="postTitle">Title:</label>
<input type="text" name="postTitle" id="postTitle" class="form-control">
<label for="postCat">Category:</label>
<select name="postCat" id="postCat" class="form-control">

</select>
<label for="postDesc">Description:</label>
<textarea rows="5" cols="30" name="postDesc" id="postDesc" class="form-control"></textarea>
<label for="postTag">Tags:</label>
<input type="text" name="postTag" id="postTag" class="form-control">
<label for="userImg">Select image:</label>
<input type="file" name="userImg" id="userImg">
<br>
<button type="button" class="btn btn-success" id="adminPostBtn">Add post</button>

</div>

</form>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
<!--Comment Modal-->
<div class="modal fade" id="adminAddComment" role="dialog"  aria-labelledby="adminCommentLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h3 class="modal-title" id="adminCommentLabel">Add comment</h3>
</div>
<div class="modal-body">
<form action="#" method="post" enctype="multipart/form-data">
<div class="form-group">
<input type="hidden" name="postId" id="postId" value="<?php echo $_SESSION['postid']; ?>">
<label for="ucomEmail">Emailt:</label>
<input type="email" name="ucomEmail" id="ucomEmail" class="form-control">

<label for="uComment">Comment:</label>
<textarea rows="5" cols="30" name="ucomment" id="uComment" class="form-control"></textarea>

<br>
<button type="button" class="btn btn-success" id="subCommentBtn">Add</button>

</div>

</form>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
<!--Update Post Modal-->
<div class="modal fade" id="adminUpdatedPost" role="dialog"  aria-labelledby="adminUpdatedPostLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h3 class="modal-title" id="adminUpdatedPostLabel">Update post</h3>
</div>
<div class="modal-body">
<form action="#" method="post">
<div class="form-group">
<input type="hidden" name="updatePostId" id="adminUpdatePostId">
<label for="adminUpdatePostTitle">Title:</label>
<input type="text" name="updatePostTitle" id="adminUpdatePostTitle" class="form-control">

<label for="adminUpdatePostCat">Category:</label>
<select name="updatePostCat" id="adminUpdatePostCat" class="form-control">

</select>
<label for="adminUpdatePostDesc">Description:</label>
<textarea rows="5" cols="30" name="updatePostDesc" id="adminUpdatePostDesc" class="form-control"></textarea>

<label for="adminUpdatePostTag">Tags:</label>
<input type="text" name="updatePostTag" id="adminUpdatePostTag" class="form-control">

<br>

<button type="button" class="btn btn-success" id="adminEditPostBtn">Update</button>

</div>

</form>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>

<!--Update Comment Modal-->
<div class="modal fade" id="myEditedComment" role="dialog"  aria-labelledby="editedCommentLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h3 class="modal-title" id="editedCommentLabel">Edit comment</h3>
</div>
<div class="modal-body">
<form action="#" method="post" enctype="multipart/form-data">
<div class="form-group">
<input type="hidden" name="editDelComID" id="editDelComId">
<!--label for="editDelComEmail">Emailt:</label>
<input type="email" name="editDelComEmail" id="editDelComEmail" class="form-control"-->

<label for="editDelComment">Comment:</label>
<textarea rows="5" cols="30" name="editDelComment" id="editDelComment" class="form-control"></textarea>

<br>
<button type="button" class="btn btn-success" id="editCommentBtn">Update</button>

</div>

</form>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>