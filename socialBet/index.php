<?php
    include_once "fbmain.php";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>Social Bet Testing!</title>
    
        <script type="text/javascript">
            function streamPublish(name, description, hrefTitle, hrefLink, userPrompt){        
                FB.ui({ method : 'feed', 
                        message: userPrompt,
                        link   :  hrefLink,
                        caption:  hrefTitle,
                        picture: 'https://fbcdn-sphotos-d-a.akamaihd.net/hphotos-ak-ash3/525911_4046666642186_1314659684_n.jpg'
               });
               //http://developers.facebook.com/docs/reference/dialogs/feed/
   
            }
            function publishStream(){
                streamPublish("Stream Publish", 
								'Checkout iOS apps and games from iThinkdiff.net. I found some of them are just awesome!', 
								'Checkout iThinkdiff.net', 
								'http://ithinkdiff.net', 
								"Demo Facebook Application Tutorial"
							  );
            }
            
            function newInvite(){
                 var receiverUserIds = FB.ui({ 
                        method : 'apprequests',
                        message: 'Come on man checkout my applications. visit http://ithinkdiff.net',
                 },
                 function(receiverUserIds) {
                          console.log("IDS : " + receiverUserIds.request_ids);
                        }
                 );
                 //http://developers.facebook.com/docs/reference/dialogs/requests/
            }
        </script>
    </head>
<body>
    
<style type="text/css">
    .box{
        margin: 5px;
        border: 1px solid #60729b;
        padding: 5px;
        width: 500px;
        height: 200px;
        overflow:auto;
        background-color: #e6ebf8;
    }
</style>

<div id="fb-root"></div>
    <script type="text/javascript" src="http://connect.facebook.net/en_US/all.js"></script>
     <script type="text/javascript">
       FB.init({
         appId  : '<?=$fbconfig['appid']?>',
         status : true, // check login status
         cookie : true, // enable cookies to allow the server to access the session
         xfbml  : true  // parse XFBML
       });
       
     </script>
    <h3>Social Bet Testing Graph calls</h3>
    
    <br />
    
    <?php if (!$user) { ?>
        Login: 
        <a href="<?=$loginUrl?>" class="fb-login-button">Facebook Login</a>
    <?php } else { ?>
        Welcome <?php echo $userInfo['name'] ?>. <a href="<?=$logoutUrl?>" class="fb-login-button">Facebook Logout</a>
        <br />
        You are <?php echo $userInfo['gender']?> and <?php echo $userInfo['relationship_status']?>
    <?php } ?>


    <!-- all time check if user session is valid or not -->
    <?php if ($user){ ?>
    <table border="0" cellspacing="3" cellpadding="3">
        <tr>
            <td>
                <!-- Data retrived from user profile are shown here -->
                <div class="box">
                    <b>User Information using Graph API</b>
                    <?php d($userInfo); ?>
                </div>
            </td>
            <td>           
                <div class="box">
                    <b>User likes these movies | using graph api</b>
                     <?php d($movies); ?>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="box">
                    <b>Wall Post & Invite Friends</b>
                    <br /><br />
                    <a href="<?=$fbconfig['baseurl']?>?publish=1">Publish Post using PHP </a>
                    <br />
                    You can also publish wall post to user's wall via Ajax.
                    <?php if (isset($_GET['success'])) { ?>
                        <br />
                        <strong style="color: red">Wall post published in your wall successfully!</strong>
                    <?php } ?>
                        
                    <br /><br />
                    <a href="#" onclick="publishStream(); return false;">Publish Wall post using Facebook Javascript</a>
                    
                    <br /><br />
                    <a href="#" onclick="newInvite(); return false;">Invite Friends</a>
                </div>
            </td>
            <td>
            	<div class="box">
                    <form name="" action="<?=$fbconfig['baseurl']?>" method="post">
                        <label for="tt">Status update using Graph API</label>
                        <br />
                        <textarea id="tt" name="tt" cols="50" rows="5">Write your status here and click 'Update My Status'</textarea>
                        <br />
                        <input type="submit" value="Update My Status" />
                    </form>
                    <?php if (isset($statusUpdate)) { ?>
                        <br />
                        <strong style="color: red">Status Updated Successfully! Status id is <?=$statusUpdate['id']?></strong>
                     <?php } ?>
                </div>
            
            </td>
            </tr>
            <tr>
            <td>
            	<div class="box">
                	<b>Friends</b>
                    <br /><br />
                    <?php $friendsList = $facebook->api('/me/friends');
						foreach ($friendsList as $friends)
						{
							foreach ($friends as $friend)
							{
								?>  <a href="http://www.facebook.com/<?php echo $friend['id'] ?>" title="<?php echo $friend['name'] ?>">
                                		<img src="https://graph.facebook.com/<?php echo $friend['id']?>/picture" 
                                        alt="<?php echo $friend['name'] ?>" >
                                    </a> 
								<?php
							}
						}
					?>
                </div>
            </td>
            <td>
            	<div class="box">
                	<b>Activities</b>
                    <br /><br />
                    <?php $activitiesList = $facebook->api('/me/activities');
						foreach ($activitiesList as $activities)
						{
							foreach ($activities as $activity)
							{
								?>  <a href="http://www.facebook.com/<?php echo $activity['id'] ?>" title="<?php echo $activity['name'] ?>" >
                                		<img src="https://graph.facebook.com/<?php echo $activity['id']?>/picture" 
                                        alt="<?php echo $activity['name'] ?>">
                                    </a> 
								<?php
							}
						}
					?>
                </div>
            </td>
            </tr>
            <tr>
            <td>
            	<div class="box">
                	<b>Statuses</b>
                    <br /><br />
                    <?php $statusList = $facebook->api('/me/statuses');
						foreach ($statusList as $statuses)
						{
							foreach ($statuses as $status)
							{
								d($status);
							}
						}
					?>
                </div>
            </td>
            <td>
            	<div class="box">
                	<b>Photo's Tagged In</b>
                    <br /><br />
                    <?php $photoList = $facebook->api('/me/photos');
						foreach ($photoList as $photos)
						{
							foreach ($photos as $photo)
							{
								?> <img src="<?php echo $photo['source']; ?>" alt="<?php echo $photo['name']; ?>" /> <?php
							}
						}
					?>
                </div>
            </td>
        </tr>
    </table>
    
    <?php } ?>

    </body>
</html>