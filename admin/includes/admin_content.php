                                           
<div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Statistics Overview</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">

                    <?php 
                    require "init.php";
                    
               /*     $user_instance = new User();

                    $user_instance->find_user_by_id(2);

            */

                    $user = new User();

                    $result_set = User::find_all_users();

                
                    foreach($result_set as $item){
                        echo $item->id."<br>";
                    }

                    $first_user = User::find_user_by_id(2);
                    echo $first_user->username;


                 


                                    






                    ?>
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Like SB Admin?</strong> Try out <a href="http://startbootstrap.com/template-overviews/sb-admin-2" class="alert-link">SB Admin 2</a> for additional features!
                        </div>
                    </div>
                </div>
                <!-- /.row -->

              
                <!-- /.row -->

                
                <!-- /.row -->

                
                    
                </div>
                <!-- /.row -->

            </div>