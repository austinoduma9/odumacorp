<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oduma Corp App</title>
    <link rel="icon" href="/images/OdumaCorp-icon.png">
    <link rel="stylesheet" href="./Styles/styles.css">
    <!-- jaldi font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jaldi:wght@400;700&display=swap" rel="stylesheet">
    <!-- jacques francois font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jacques+Francois&family=Jaldi:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include_once 'navbar.php'?>
    <!-- search bar -->
     <div class="search">
        <div class="in-search">
            <input id="search-area" placeholder="Search Field"></input>
            
            <!-- <button  type="button">Search </button> -->
            <a href=""><img src="./images/icons8-search-48.png" alt="" srcset=""></a>
        </div>
     </div>
    <!-- buttons -->
    <div class="actions">
        <button type="button" class="btn">My Post</button>
        <button type="button" class="btn">Make Post</button>
        <button type="button" class="btn">Proposals</button>
    </div>
    <!-- sections -->
    <section class="container">
        <!-- mid-section -->
        <section id="mid">
            <!-- left-side -->
            <div class="left section">
                <div class="user-section">
                    <img src="images/usericon.png" alt="user-icon" class="icon">
                    <div>
                        <div class="user-name">John Jane Doe</div>
                        <button>Edit</button>
                    </div>
                    
                </div>
                <div class="user-about"><span>About:</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates beatae esse soluta fugit magni iure, nobis quod culpa eos iste tempore similique neque expedita vel atque officiis asperiores? </div>
                <div class="user-info">
                    <ul>
                        <li>Profile views #</li>
                        <li>Connecitons #</li>
                        <li>Inventions #</li>
                        <li>Patents #</li>
                        <li>Groups</li>
                        <li>Pages #</li>
                        <li>Events #</li>
                    </ul>
                </div>
                <div class="more-user-info">
                    <ul>
                        <li><span>Company:</span>name</li>
                        <li><span>Industry:</span>name</li>
                    </ul>
                </div>
            </div>
            <!-- center-part -->
            <div class="center section">
                <div class="post-section card">
                    <textarea name="post" id="post-area" cols="" rows="" placeholder="Post here..."></textarea>
                    <fieldset>
                        <span>Industry:</span>
                        <select name="Industry" id="industry">
                            <option value="IT">IT</option>
                            <option value="Business">Business</option>
                            <option value="Arts">Arts</option>
                            <option value="Agriculture">Agriculture</option>
                        </select>
                        <span>Attachment:</span><input type="file" name="Attachment" value="Attach" id="attachment">
                        <button type="button">Submit</button>

                    </fieldset>
                </div>
                <div class="idea-section card">
                    <div class="top">
                        <span>
                            <button>...</button>
                            <button>X</button>
                        </span>
                    </div>
                    <div class="idea-info">
                        <table>
                            <tr>
                                <td>Connected<span id="status"></span></td>
                                <td>Name</td>
                            </tr>
                            <tr>
                                <td>Industry:Medicine</td>
                                <td>6h ago</td>
                            </tr>
                        </table>
                    </div>
                    <hr>
                    <div class="idea-body">
                        <span>Title 1</span>
                        <div class="idea-def">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor nemo iste facilis corporis vitae laudantium ea ducimus cumque nobis. Quos debitis perspiciatis impedit praesentium voluptate! Autem cupiditate dicta quod rem!
                            Voluptate modi assumenda dolorem, quibusdam unde iure facere laudantium nihil, aliquid explicabo quis? Velit tempore totam error facilis, veritatis pariatur minus perferendis! Dicta sequi natus dolores harum modi odit esse?
                        </div>
                        <div class="interest-section">
                            <span>Interests #</span>
                            <span>Views #</span>
                            <span>Repost #</span>
                            <span>Likes #</span>
                        </div>
                        <div class="idea-media-section">
                            <img src="" alt="" srcset="">
                            <img src="" alt="" srcset="">
                        </div>
                    </div>
                    <div class="action-area ">
                        <div class="idea-action1 small-card">
                            <div class="area">
                                <span>Collaborations #</span>
                                <span>Proposal #</span>
                                <span>Pantent</span>
                            </div>
                            <button type="button">Patent</button>
                        </div>
                        <div class="comment-section small-card">
                            <span>Comments # [Auto Scroll]</span>
                            <textarea name="comments" placeholder="comment here..." id="comments" cols="30" rows="10"></textarea>
                            <button type="button">Comment</button>
                        </div>
                    </div>
                </div>
                <div class="viewers-section card">
                    <div class="that-viewed">
                        <span class="head">Who viewed your Profile</span>
                        <div class="tile-container">
                            <div class="tile">
                                <img src="" alt="profile-icon" srcset="" class="icon">
                                <div>
                                    <span>First Last Name</span>
                                    <div class="titles-about">
                                        Lorem ipsum, dolor sit amet con
                                    </div>
                                    <button type="button">Connect +</button>
                                </div>
                            </div>
                            <div class="tile">
                                <img src="" alt="profile-icon" srcset="" class="icon">
                                <div>
                                    <span>First Last Name</span>
                                    <div class="titles-about">
                                        Lorem ipsum, dolor sit amet con
                                    </div>
                                    <button type="button">Connect +</button>
                                </div>
                            </div>
                            <div class="tile">
                                <img src="" alt="profile-icon" srcset="" class="icon">
                                <div>
                                    <span>First Last Name</span>
                                    <div class="titles-about">Lorem ipsum, dolor sit amet con</div>
                                    <button type="button">Connect +</button>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="suggestions-section card">
                    <div class="top-section">
                        <div class="left-section">
                            <span class="head">Node Suggestions</span>
                            <div class="tile-container">
                                <div class="tile">
                                    <img src="" alt="profile-icon" srcset="" class="icon">
                                    <div>
                                        <span>First Last Name</span>
                                        <div class="titles-about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus!</div>
                                        <div class="titles-about"></div>
                                        <button type="button">Connect +</button>
                                    </div>
                                </div>
                                <div class="tile">
                                    <img src="" alt="profile-icon" srcset="" class="icon">
                                    <div>
                                        <span>First Last Name</span>
                                        <div class="titles-about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus!</div>
                                        <div class="titles-about"></div>
                                        <button type="button">Connect +</button>
                                    </div>
                                </div>
                                <div class="tile">
                                    <img src="" alt="profile-icon" srcset="" class="icon">
                                    <div>
                                        <span>First Last Name</span>
                                        <div class="titles-about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus!</div>
                                        <div class="titles-about"></div>
                                        <button type="button">Connect +</button>
                                    </div>
                                </div>
                                <div class="tile">
                                    <img src="" alt="profile-icon" srcset="" class="icon">
                                    <div>
                                        <span>First Last Name</span>
                                        <div class="titles-about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus!</div>
                                        <div class="titles-about"></div>
                                        <button type="button">Connect +</button>
                                    </div>
                                </div>
                            </div>
                            
                          
                        </div>
                        <div class="right-section">
                            <span class="head">Companies to look at</span>
                            <div class="tile-container">
                                <div class="tile">
                                    <img src="" alt="profile-icon" srcset="" class="icon">
                                    <div>
                                        <span>First Last Name</span>
                                        <div class="titles-about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus!</div>
                                        <button type="button">Connect +</button>
                                    </div>
                                </div>
                                <div class="tile">
                                    <img src="" alt="profile-icon" srcset="" class="icon">
                                    <div>
                                        <span>First Last Name</span>
                                        <div class="titles-about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus!</div>
                                        <button type="button">Connect +</button>
                                    </div>
                                </div>
                                <div class="tile">
                                    <img src="" alt="profile-icon" srcset="" class="icon">
                                    <div>
                                        <span>First Last Name</span>
                                        <div class="titles-about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus!</div>
                                        <button type="button">Connect +</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-section">
                        <div class="left-section">
                            <span class="head">Nodes in your community</span>
                                <div class="tile-container">
                                    <div class="tile">
                                        <img src="" alt="profile-icon" srcset="" class="icon">
                                        <div>
                                            <span>First Last Name</span>
                                            <div class="titles-about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus!</div>
                                            <button type="button">Connect +</button>
                                        </div>
                                    </div>
                                    <div class="tile">
                                        <img src="" alt="profile-icon" srcset="" class="icon">
                                        <div>
                                            <span>First Last Name</span>
                                            <div class="titles-about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus!</div>
                                            <button type="button">Connect +</button>
                                        </div>
                                    </div>
                                    <div class="tile">
                                        <img src="" alt="profile-icon" srcset="" class="icon">
                                        <div>
                                            <span>First Last Name</span>
                                            <div class="titles-about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus!</div>
                                            <button type="button">Connect +</button>
                                        </div>
                                    </div>
                                    <div class="tile">
                                        <img src="" alt="profile-icon" srcset="" class="icon">
                                        <div>
                                            <span>First Last Name</span>
                                            <div class="titles-about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus!</div>
                                            <button type="button">Connect +</button>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="right-section">
                            <span class="head">Based on your profile</span>
                            <div class="tile-container">
                                <div class="tile">
                                    <img src="" alt="profile-icon" srcset="" class="icon">
                                    <div>
                                        <span>First Last Name</span>
                                        <div class="titles-about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus!</div>
                                        <div class="titles-about"></div>
                                        <button type="button">Connect +</button>
                                    </div>
                                </div>
                          
                                <div class="tile">
                                    <img src="" alt="profile-icon" srcset="" class="icon">
                                    <div>
                                        <span>First Last Name</span>
                                        <div class="titles-about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus!</div>
                                        <div class="titles-about"></div>
                                        <button type="button">Connect +</button>
                                    </div>
                                </div>
                                <div class="tile">
                                    <img src="" alt="profile-icon" srcset="" class="icon">
                                    <div>
                                        <span>First Last Name</span>
                                        <div class="titles-about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus!</div>
                                        <div class="titles-about"></div>
                                        <button type="button">Connect +</button>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-based">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right section">
                <span>Proposals</span>
                <hr>
                <div class="proposal-section">
                    <div class="tile">
                        <div class="info">
                            <img src="" alt="profile-icon" srcset="">
                            <span>Investor 1</span>
                        </div>
                        <div class="titles-about"><span>About:</span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident, culpa.</div>
                        <div class="interest-section">
                            <span>Interests #</span>
                            <span>Views #</span>
                            <span>Repost #</span>
                            <span>Likes #</span>
                        </div>
                        <div class="action-section">
                            <button type="button">Reply</button>
                            <button type="button">Attach</button>
                            <select name="" id="">
                                <option value="On Hold">On Hold</option>
                                <option value="Accept">Accept</option>
                                <option value="Counter">Counter</option>
                                <option value="Request details">Request details</option>
                            </select>
                        </div>
                    </div>
                    <div class="tile">
                        <div class="info">
                            <img src="" alt="profile-icon" srcset="">
                            <span>Investor 1</span>
                        </div>
                        <div class="titles-about"><span>About:</span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident, culpa.</div>
                        <div class="interest-section">
                            <span>Interests #</span>
                            <span>Views #</span>
                            <span>Repost #</span>
                            <span>Likes #</span>
                        </div>
                        <div class="action-section">
                            <button type="button">Reply</button>
                            <button type="button">Attach</button>
                            <select name="" id="">
                                <option value="On Hold">On Hold</option>
                                <option value="Accept">Accept</option>
                                <option value="Counter">Counter</option>
                                <option value="Request details">Request details</option>
                            </select>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
</section>



</body>

</html>
<?php require_once 'footer.php' ?>