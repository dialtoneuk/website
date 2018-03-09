<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-top: 15px; border-radius: 5px;">
            <a class="navbar-brand" href="<?=$url_root?>"><?=$website_name?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">

                <?php
                if ( $profiles->session->info->active)
                {
                    ?>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Builds
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">View</a>
                                <a class="dropdown-item" href="#">Links</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Upload</a>
                            </div>
                        </li>


                        <?php

                        if ( isset( $profiles->teams ) == false )
                        {

                            ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Team
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Create</a>
                                        <a class="dropdown-item" href="#">Join</a>
                                    </div>
                                </li>
                            <?php
                        }
                        else
                        {

                            if ( isset( $profiles->teams->info->teamid) )
                            {

                                ?>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Team
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">Builds</a>
                                            <a class="dropdown-item" href="#">Members</a>

                                            <?php

                                                if ( $profiles->teams->info->owner == $profiles->session->info->userid )
                                                {

                                                    ?>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">manage</a>
                                                    <?php
                                                }
                                            ?>
                                        </div>
                                    </li>
                                <?php
                            }
                            else
                            {
                                ?>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Team
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">Create</a>
                                            <a class="dropdown-item" href="#">Join</a>
                                        </div>
                                    </li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                    <ul class="navbar-nav" style="margin-left: auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?=$profiles->user->info->username?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="settings">Settings</a>
                                <a class="dropdown-item" href="logout">Logout</a>
                            </div>
                        </li>
                    </ul>
                    <?php

                }
                else
                {

                    ?>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?=$url_root?>login">Login</a>
                        </li>
                    </ul>
                    <?php
                }
                ?>
            </div>
        </nav>
