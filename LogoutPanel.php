
<ul class="nav nav-pills nav-justified">
<li class="active"><a href="#mynewPost" data-toggle="modal">Add posts</a></li>


<li><a href="#" id="showBlogPost">Add comments</a></li>

<!--li><a href="#myComment" data-toggle="modal" id="showBlogPost">Add comments</a></li-->

<!--li><a href="#" id="showComment" data-postid="<?php echo $_SESSION['postid']; ?>">Edit comments</a></li-->

<li><a href="#"><?php echo $_SESSION['scrnam'];  ?></a>
</li>
<li><a href="logoutAction.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
</li>
</ul>
<!--Update Post Modal-->
<div class="modal fade" id="myUpdatedPost" role="dialog"  aria-labelledby="updatedPostLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h3 class="modal-title" id="updatedPostLabel">Update post</h3>
</div>
<div class="modal-body">
<form action="#" method="post">
<div class="form-group">
<input type="hidden" name="updatePostId" id="updatePostId">
<label for="updatePostTitle">Title:</label>
<input type="text" name="updatePostTitle" id="updatePostTitle" class="form-control">

<label for="updatePostCat">Category:</label>
<select name="updatePostCat" id="updatePostCat" class="form-control">

</select>
<label for="updatePostDesc">Description:</label>
<textarea rows="5" cols="30" name="updatePostDesc" id="updatePostDesc" class="form-control"></textarea>

<label for="updatePostTag">Tags:</label>
<input type="text" name="updatePostTag" id="updatePostTag" class="form-control">

<br>

<button type="button" class="btn btn-success" id="editPostBtn">Update</button>

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