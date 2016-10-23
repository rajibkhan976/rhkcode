<?php 
session_start();
if(isset($_SESSION['userloginStatus'])){
	if($_SESSION['userloginStatus'] != "userloggedin"){
		$_SESSION['userloginStatus'] = "userNotloggedin";
		}
	}
	else{$_SESSION['userloginStatus'] = "userNotloggedin";;}
	
	if(isset($_SESSION['adminloginStatus'])){
	if($_SESSION['adminloginStatus'] != "adminloggedin"){
		$_SESSION['adminloginStatus'] = "adminNotloggedin";
		}
	}
	else{$_SESSION['adminloginStatus'] = "adminNotloggedin";;}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<link href="../src/css/bootstrap.css" rel="stylesheet">
<style>
a{text-decoration:none;}
</style>
</head>

<body>
<div class="container">
<!--header-->
<div class="row" id="header">
<div class="col-md-12 bg-info">

<h1 class="text-success text-center">WPSI Round 26 Blog</h1>
<form class="form-inline pull-right" role="form">
<div class="input-group">
<input type="text" name="searchBlog" id="searchBlog" class="form-control">
<span class="input-group-btn"><button type="button" class="btn btn-danger" id="blogSearch"><span class="glyphicon glyphicon-search"></span></button></span>
</div>

</form>

</div>


</div>

<!--navbar-->
<div class="row" id="navmenu">
<div class="col-md-12 bg-warning" id="registerandloginpanel">
<?php
if($_SESSION['userloginStatus'] == "userloggedin"){
	require("LogoutPanel.php");
	}
	elseif($_SESSION['adminloginStatus'] == "adminloggedin")
	{require("adminPanel.php");}
	else{
		require("RegisterAndLoginPanel.php");
		}
?>
</div>



</div>

<!--Register Modal-->
<div class="modal fade" id="myModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h3 class="modal-title" id="myModalLabel">Register</h3>
</div>
<div class="modal-body">
<form role="form" action="#" method="post" id="regform">
<div class="form-group">
<label for="uem">Useremail:</label>
<input type="email" name="uem" class="form-control" id="uem">
<span id="showuem" class="text-warning"></span>
<br>
<label for="upas">Password:</label>
<input type="password" name="upas" class="form-control" id="upas">
<label for="rpas">Retype password:</label>
<input type="password" name="rpas" class="form-control" id="rpas">

<br>
<button class="btn btn-success" id="regBtn">Register</button>
</div>
</form>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>

<!--Login Modal-->
<div class="modal fade" id="myLogin" role="dialog" aria-labelledby="myLoginLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h3 class="modal-title" id="myLoginLabel">Login</h3>
</div>
<div class="modal-body">
<form role="form" action="#" method="post">
<div class="form-group">
<label for="umail">User eamil:</label>
<input type="email" class="form-control" name="umail" id="umail">
<label for="upass">Password:</label>
<input type="password" class="form-control" name="upass" id="upass"><br>
<button type="button" class="btn btn-success" id="loginBtn">Login</button>

</div>
</form>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
<!--Carousel-->

<div class="row bg-warning">
<div class="col-md-12">
<div id="myCarousel" class="carousel slide">
<ol class="carousel-indicators">
<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
<li data-target="#myCarousel" data-slide-to="1"></li>
<li data-target="#myCarousel" data-slide-to="2"></li>
</ol>

<div class="carousel-inner">
<div class="item active">
<img src="d.png" alt="first slide">
</div>
<div class="item">
<img src="f.png" alt="second slide">
</div>
<div class="item">
<img src="e.png" alt="third slide">
</div>
</div>
<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo; prev</a>
<a class="carousel-control right" href="#myCarousel" data-slide="next">next &rsaquo;</a>
</div>
</div>
</div>


<!--body-->

<div class="row" id="body">
<div class="col-md-3 bg-warning">
<br><br>
<ul class="nav nav-pills nav-stacked">
<li class="active"><a href="#">Home</a></li>
<li><a href="#">About us</a></li>
<li><a href="#">Policies & guidelines</a></li>
<li><a href="#">Copyright & plagiarism</a></li>
<li><a href="#">Admin panel</a></li>
<li><a href="#">Partners & collaborators</a></li>
</ul>
<div id="categoryBar">
</div>
</div>
<div class="col-md-9 bg-warning">
<br>
<div id="blogPost">
<?php 
if($_SESSION['userloginStatus'] == "userloggedin"){
	require("userPosts.php");
	}
	elseif($_SESSION['adminloginStatus'] == "adminloggedin")
	{require("adminManagePost.php");}
else{
require("blogPost.php");}
 ?>
</div>
<!--div id="postDetail">
</div>
<div id="categoryPosts">
</div-->
</div>
</div>
<!--Post Modal-->
<div class="modal fade" id="mynewPost" role="dialog"  aria-labelledby="postLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h3 class="modal-title" id="postLabel">Add new post</h3>
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
<button type="button" class="btn btn-success" id="subPostBtn">Add post</button>

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
<div class="modal fade" id="myComment" role="dialog"  aria-labelledby="commentLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h3 class="modal-title" id="commentLabel">Add comment</h3>
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
<!--footer-->

<div class="row" id="footer">
<div class="col-md-12 bg-info">

<h3 class="text-success text-center"><span class="glyphicon glyphicon-copyright-mark"></span> 2016 by Rajib Hossain Khan</h3>
</div>
</div>
</div>

<script src="../src/js/jquery-1.11.3.min.js"></script>
<script src="../src/js/bootstrap.js"></script>
<script>
$(document).ready(function(e) {
	
    $("#loginBtn").click(function() {
        var userEmail = $("#umail").val();
		var userPass = $("#upass").val();
		if(userEmail != '' &&  userPass != ''){
			$.post("checkLogin.php",{
				action: "checklogin",
				useraction: "checkUserlogin",
				adminaction: "checkAdminlogin",
				usemail: userEmail,
				uspass: userPass,
				
				randnum: Math.random()
				
				},function(data,status){
					if(data == 1){
						$("#myLogin").modal("hide");
						//$("#registerandloginpanel").load("LogoutPanel.php");
						location.reload();
						}
						else{alert("Login failed !");}
					});
			}
			else{alert("Please fill the form !");};
    });
	$("#regBtn").click(function(e) {
        e.preventDefault();
		var usrEmail = $("#uem").val();
		var usrPass = $("#upas").val();
		var rPass = $("#rpas").val();
		
		
		if(usrEmail != '' && usrPass != '' && rPass != ''){
			$.post("register.php",{
				action: "register",
				usemail: usrEmail,
				usepass: usrPass,
				repass: rPass,
				
				rand: Math.random()
				},function(data,status){
					if(data == 1){
						$("#myModal").modal('hide');
						$("#regform")[0].reset();
						alert("Registration successful !");
						}
						else{alert("Registration failed !");}
					});
			}
			else{alert("Please fill the form !");}
    });
	$("#uem").keyup(function(){
		var uem = $("#uem").val();
		$.get("checkUser.php",{
			action: 'checkuser',
			chkusr: uem,
			rand: Math.random()
			},function(data){
				$("#showuem").html(data);
			});
		});
		$("#postCat").load("category.php");
		$("#updatePostCat").load("category.php");
		$("#subPostBtn").click(function(e) {
			e.preventDefault();
            var title = $("#postTitle").val();
			var catg = $("#postCat").val();
			var descrip = $("#postDesc").val();
			var tag = $("#postTag").val();
			if(title != '' && catg != '' && descrip != '' && tag != ''){
				$.post("addPost.php",{
					action : 'added',
					title : title,
					catg : catg,
					descrip : descrip,
					tag : tag,
					rand: Math.random()
					},function(data,status,xhr){
					if(data != ''){
						$("#mynewPost").modal("hide");
						alert(data);
						location.reload();
						}
					});
				}
				else{alert("Please fill the form accordingly !");}
        });
		$("#adminPostBtn").click(function(e) {
			e.preventDefault();
            var title = $("#postTitle").val();
			var catg = $("#postCat").val();
			var descrip = $("#postDesc").val();
			var tag = $("#postTag").val();
			if(title != '' && catg != '' && descrip != '' && tag != ''){
				$.post("adminAddPost.php",{
					adminAction : 'adminPostAdded',
					title : title,
					catg : catg,
					descrip : descrip,
					tag : tag,
					rand: Math.random()
					},function(data,status,xhr){
					if(data != ''){
						$("#mynewPost").modal("hide");
						alert(data);
						location.reload();
						}
					});
				}
				else{alert("Please fill the form accordingly !");}
        });
		$("#blogPost").on("click",".postdetail",function(){
			var postId = $(this).attr("data-postid");
			alert(postId);
			//var url = "postDetails.php?postid=" + postId;
			$.get("postDetails.php",{
				postid : postId,
				rand : Math.random()
				},
				function(data){
				$("#blogPost").replaceWith(data);
				//$("#postDetail").html(data);
				});
			});
			/*$("#addComment").on("click","#subCommentBtn",function(e) {
                alert($("#addComment").attr("data-postsid"));
            });*/
			
		$("#categoryBar").load("categorySidebar.php");
		$("#categoryBar").on("click","#categorylink",function(){
			var catid = $(this).attr("data-cid");
			//alert(catid);
			var url = "categoryPosts.php?catid=" + catid;
			$.get(url,function(data){
				$("#blogPost").replaceWith(data);
				
				//$("#categoryPosts").html(data);
				});
			});
			/*$("#updatePostBtn").click(function(e) {
                $.post("ManageUserPost.php",{
					postid: $("a.blogposts").attr("data-postid")
					},function(data,status,xhr){
					$("#updatePostTitle").val(data);
					});
            });*/
			$("#blogPost").on("click","#updatePostBtn",function(){
				//alert($(this).attr("data-updateid"));
				$.post("ManageUserPost.php",{
				postid : $(this).attr("data-updateid")},
				function(data,status,xhr){
					var response = $.parseJSON(data);
					//$("textarea#updatePostDesc").jqte();
					$("#updatePostId").val(response.postid);
					$("#updatePostTitle").val(response.posttitle);
					$("#updatePostCat").val(response.postcatg);
					$("#updatePostDesc").val(response.postdesc);
					$("#updatePostTag").val(response.posttag);
					});
				});
				
				$("#editPostBtn").click(function(e) {
                    var upostId = $("#updatePostId").val();
					var upostTitle = $("#updatePostTitle").val();
					var upostCatg = $("#updatePostCat").val();
					var upostDesc = $("#updatePostDesc").val();
					var upostTag = $("#updatePostTag").val();
					//alert(upostId);
					$.post("ManageUserPost.php",{
						updateaction : 'postUpdate',
						postId : upostId,
						postTitle : upostTitle,
						postCatg : upostCatg,
						postDesc : upostDesc,
						postTag : upostTag
						},function(data,status,xhr){
							if(data != ''){
						$("#myUpdatedPost").modal("hide");		
						alert(data);
						location.reload();
						}
						else{alert("Error !");}
						});
                });
				$("#blogPost").on("click","#deletePostBtn",function(){
                    var delid = $(this).attr("data-deleteid");
					//alert(delid);
					var stat = confirm("Please confirm the deletion !");
					if(stat == true){
					$.post("ManageUserPost.php",{
						deleteaction : "deletepost",
						deleteid : delid,
						rand : Math.random()
						},function(data,status,xhr){
							if(data != ''){
								alert(data);
								location.reload();
								}
								else{alert("Sorry for system inconvenience !");}
						
						});
					}
					});
					$("#adminUpdatePostCat").load("category.php");
					$("#blogPost").on("click","#adminupdatePostBtn",function(){
				//alert($(this).attr("data-updateid"));
				$.post("ManageAdminPost.php",{
				postid : $(this).attr("data-updateid")},
				function(data,status,xhr){
					var response = $.parseJSON(data);
					//$("textarea#updatePostDesc").jqte();
					$("#adminUpdatePostId").val(response.postid);
					$("#adminUpdatePostTitle").val(response.posttitle);
					$("#adminUpdatePostCat").val(response.postcatg);
					$("#adminUpdatePostDesc").val(response.postdesc);
					$("#adminUpdatePostTag").val(response.posttag);
					});
				});
				
				$("#adminEditPostBtn").click(function(e) {
                    var upostId = $("#adminUpdatePostId").val();
					var upostTitle = $("#adminUpdatePostTitle").val();
					var upostCatg = $("#adminUpdatePostCat").val();
					var upostDesc = $("#adminUpdatePostDesc").val();
					var upostTag = $("#adminUpdatePostTag").val();
					//alert(upostId);
					$.post("ManageAdminPost.php",{
						updateaction : 'postUpdate',
						postId : upostId,
						postTitle : upostTitle,
						postCatg : upostCatg,
						postDesc : upostDesc,
						postTag : upostTag
						},function(data,status,xhr){
							if(data != ''){
						$("#adminUpdatedPost").modal("hide");		
						alert(data);
						location.reload();
						}
						else{alert("Error !");}
						});
                });
				$("#blogPost").on("click","#admindeletePostBtn",function(){
                    var delid = $(this).attr("data-deleteid");
					//alert(delid);
					var stat = confirm("Please confirm the deletion !");
					if(stat == true){
					$.post("ManageAdminPost.php",{
						deleteaction : "deletepost",
						deleteid : delid,
						rand : Math.random()
						},function(data,status,xhr){
							if(data != ''){
								alert(data);
								location.reload();
								}
								else{alert("Sorry for system inconvenience !");}
						
						});
					}
					});
					$("#showBlogPost").click(function(e){
						$.get("userBlogPost.php",{
							action : 'showPostForComment',
							rand : Math.random()
							},function(data,status,xhr){
						$("#blogPost").replaceWith(data);
						});
						});
				$("#blogPost").on("click","#addComment",function(){
				var postid = $(this).attr("data-postid");					
				$("#subCommentBtn").click(function(e) {
                var ucomemail = $("#ucomEmail").val();
				var ucomment = $("#uComment").val();
				if(ucomemail != '' && ucomment != ''){
					$.post("addComment.php",{
						action : 'addComment',
						postid : postid,
						ucomemail : ucomemail,
						ucomment : ucomment,
						rand : Math.random()
						},function(data,status,xhr){
						if(data != ''){
							$("#myComment").modal("hide");
							alert(data);
							location.reload();
							}
						});
					}
					else{alert("Please fill the form accordingly !");}
            });
			});				
			$("#blogPost").on("click",".blogposts",function(){
				var postid = $(this).attr("data-postid");
				$.get("userPostDetails.php",{
					name : 'usercomment',
					postid : postid,
					rand : Math.random()
					},
				function(data,status,xhr){
					if(data != ''){
						//alert(data);
						$("#blogPost").empty();
						$("#blogPost").html(data);
						}
					});
				});	
				$("#blogPost").on("click","#updateCommentBtn",function(){
					//alert($(this).attr("data-updateid"));
					$.get("ManageUserComment.php",{
						cid : $(this).attr("data-updateid"),
						pid : $(this).attr("data-postid"),
						rand : Math.random()
						},
					function(data,status,xhr){
						var response = $.parseJSON(data);
						$("#editDelComId").val(response.cid);
						$("#editDelComment").val(response.ucomment);
						});
					});
					$("#editCommentBtn").click(function(e) {
                        var cid = $("#editDelComId").val();
						var ucom = $("#editDelComment").val();
						$.get("ManageUserComment.php",{
							name : 'updatecomment',
							cid : cid,
							ucom : ucom,
							rand : Math.random()
							},
						function(data,status,xhr){
							if(data != ''){
								$("#myEditedComment").modal("hide");
								alert(data);
								location.reload();
								}
								else{alert("Error");}
							});
                    });
					$("#blogPost").on("click","#deleteCommentBtn",function(e) {
                        var stat = confirm("Are you sure that you want this comment be deleted ?");
						if(stat){
							$.get("ManageUserComment.php",{
								name : 'deleteComment',
								cid : $(this).attr("data-deleteid"),
								pid : $(this).attr("data-postid"),
								rand : Math.random()
								},
							function(data,status,xhr){
								if(data != ''){
								alert(data);
								location.reload();
								}
								else{alert("Error");}
								});
							}
                    });
					
});
</script>
</body>
</html>