<?php include('includes/header.php');
$page = "role" ?>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="white-box">
            <div class="box-heading">
                <div class="heading">
                    <div class="main-heading">Roles & Permissons</div>
                </div>
            </div>
            <nav>
                <div class="nav nav-tabs white-box-tab" id="nav-tab" role="tablist">
                    <button class="nav-link active" data-toggle="tab" data-target="#Roles" type="button" role="tab" aria-selected="true">Roles</button>
                    <button class="nav-link" data-toggle="tab" data-target="#Permission" type="button" role="tab" aria-selected="false">Permission</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="Roles" role="tabpanel">
                    <a href="./add-edit-roles.php" class="btn btn-primary" type="button"><i data-feather="plus"></i>Add Role</a>
                    <div class="table-responsive  mt-1">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>$role.name</td>
                                    <td>$role.description</td>
                                    
                                    <td>
                                        <div class="dropdown settings-drop">
                                            <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-settings">
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                    <path
                                                        d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown">
                                                <a class="dropdown-item" href="">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>$role.name</td>
                                    <td>$role.description</td>
                                    <td>
                                        <div class="dropdown settings-drop">
                                            <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-settings">
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                    <path
                                                        d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown">
                                                <a class="dropdown-item" href="">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>$role.name</td>
                                    <td>$role.description</td>
                                    <td>
                                        <div class="dropdown settings-drop">
                                            <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-settings">
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                    <path
                                                        d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown">
                                                <a class="dropdown-item" href="">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>$role.name</td>
                                    <td>$role.description</td>
                                    <td>
                                        <div class="dropdown settings-drop">
                                            <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-settings">
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                    <path
                                                        d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown">
                                                <a class="dropdown-item" href="">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>$role.name</td>
                                    <td>$role.description</td>
                                    <td>
                                        <div class="dropdown settings-drop">
                                            <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">
                                                <i data-feather="settings"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>$role.name</td>
                                    <td>$role.description</td>
                                    <td>
                                        <div class="dropdown settings-drop">
                                            <a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">
                                                <i data-feather="settings"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="tab-pane fade" id="Permission" role="tabpanel">
                    <div class="white-box-tab-head">
                        <div class="row no-gutters justify-content-end">
                            <div class="col-sm-2">
                                <h5 class="mt-3 text-right">Filter by :</h5>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="form-with-placeholder">
                                            <label for="">Select Role</label>
                                            <select name="" class="form-control">
                                                <option value=""></option>
                                                <option value="role">$role</option>
                                                <option value="role">$role</option>
                                                <option value="role">$role</option>
                                                <option value="role">$role</option>
                                                <option value="role">$role</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="form-with-placeholder">
                                            <label for="">Select Member</label>
                                            <select name="" class="form-control">
                                                <option value=""></option>
                                                <option value="member.name">$member.name</option>
                                                <option value="member.name">$member.name</option>
                                                <option value="member.name">$member.name</option>
                                                <option value="member.name">$member.name</option>
                                                <option value="member.name">$member.name</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="permission-list">
                        <div class="permission-box">
                            <div class="permission-box-head">Shares</div>
                            <ul class="permission-box-list">
                                <li>
                                    <div class="permission-des">
                                        <h4 class="p-name">Manage Share </h4>
                                        <p class="p-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, deleniti.</p>
                                    </div>
                                    <div class="checkbox"><input type="checkbox" class="icheck"></div>
                                </li>
                                <li>
                                    <div class="permission-des">
                                        <h4 class="p-name">Make a post in share</h4>
                                        <p class="p-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, deleniti.</p>
                                    </div>
                                    <div class="checkbox"><input type="checkbox" class="icheck"></div>
                                </li>
                                <li>
                                    <div class="permission-des">
                                        <h4 class="p-name">Manage Comments</h4>
                                        <p class="p-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, deleniti.</p>
                                    </div>
                                    <div class="checkbox"><input type="checkbox" class="icheck"></div>
                                </li>
                                <li>
                                    <div class="permission-des">
                                        <h4 class="p-name">Manage others shares</h4>
                                        <p class="p-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, deleniti.</p>
                                    </div>
                                    <div class="checkbox"><input type="checkbox" class="icheck"></div>
                                </li>
                            </ul>
                        </div>
                        <div class="permission-box">
                            <div class="permission-box-head">Races</div>
                            <ul class="permission-box-list">
                                <li>
                                    <div class="permission-des">
                                        <h4 class="p-name">Add Races </h4>
                                        <p class="p-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, deleniti.</p>
                                    </div>
                                    <div class="checkbox"><input type="checkbox" class="icheck"></div>
                                </li>
                                <li>
                                    <div class="permission-des">
                                        <h4 class="p-name">Edit Races</h4>
                                        <p class="p-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, deleniti.</p>
                                    </div>
                                    <div class="checkbox"><input type="checkbox" class="icheck"></div>
                                </li>
                                <li>
                                    <div class="permission-des">
                                        <h4 class="p-name">Delete Races</h4>
                                        <p class="p-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, deleniti.</p>
                                    </div>
                                    <div class="checkbox"><input type="checkbox" class="icheck"></div>
                                </li>
                                <li>
                                    <div class="permission-des">
                                        <h4 class="p-name">View Races</h4>
                                        <p class="p-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, deleniti.</p>
                                    </div>
                                    <div class="checkbox"><input type="checkbox" class="icheck"></div>
                                </li>
                                <li>
                                    <div class="permission-des">
                                        <h4 class="p-name">Delete Candidate from races</h4>
                                        <p class="p-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, deleniti.</p>
                                    </div>
                                    <div class="checkbox"><input type="checkbox" class="icheck"></div>
                                </li>
                            </ul>
                        </div>
                        <div class="permission-box">
                            <div class="permission-box-head">Profile</div>
                            <ul class="permission-box-list">
                                <li>
                                    <div class="permission-des">
                                        <h4 class="p-name">Add Candidates </h4>
                                        <p class="p-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, deleniti.</p>
                                    </div>
                                    <div class="checkbox"><input type="checkbox" class="icheck"></div>
                                </li>
                                <li>
                                    <div class="permission-des">
                                        <h4 class="p-name">Edit Candidate</h4>
                                        <p class="p-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, deleniti.</p>
                                    </div>
                                    <div class="checkbox"><input type="checkbox" class="icheck"></div>
                                </li>
                                <li>
                                    <div class="permission-des">
                                        <h4 class="p-name">Delete Candidate</h4>
                                        <p class="p-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, deleniti.</p>
                                    </div>
                                    <div class="checkbox"><input type="checkbox" class="icheck"></div>
                                </li>
                                <li>
                                    <div class="permission-des">
                                        <h4 class="p-name">View Candidate</h4>
                                        <p class="p-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, deleniti.</p>
                                    </div>
                                    <div class="checkbox"><input type="checkbox" class="icheck"></div>
                                </li>
                                <li>
                                    <div class="permission-des">
                                        <h4 class="p-name">Add Constituent </h4>
                                        <p class="p-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, deleniti.</p>
                                    </div>
                                    <div class="checkbox"><input type="checkbox" class="icheck"></div>
                                </li>
                                <li>
                                    <div class="permission-des">
                                        <h4 class="p-name">Edit Constituent</h4>
                                        <p class="p-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, deleniti.</p>
                                    </div>
                                    <div class="checkbox"><input type="checkbox" class="icheck"></div>
                                </li>
                                <li>
                                    <div class="permission-des">
                                        <h4 class="p-name">Delete Constituent</h4>
                                        <p class="p-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, deleniti.</p>
                                    </div>
                                    <div class="checkbox"><input type="checkbox" class="icheck"></div>
                                </li>
                                <li>
                                    <div class="permission-des">
                                        <h4 class="p-name">View Constituent</h4>
                                        <p class="p-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, deleniti.</p>
                                    </div>
                                    <div class="checkbox"><input type="checkbox" class="icheck"></div>
                                </li>
                            </ul>
                        </div>
                        <div class="permission-box">
                            <div class="permission-box-head">Questions</div>
                            <ul class="permission-box-list">
                                <li>
                                    <div class="permission-des">
                                        <h4 class="p-name">Add Profile Question </h4>
                                        <p class="p-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, deleniti.</p>
                                    </div>
                                    <div class="checkbox"><input type="checkbox" class="icheck"></div>
                                </li>
                                <li>
                                    <div class="permission-des">
                                        <h4 class="p-name">Edit Profile Question </h4>
                                        <p class="p-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, deleniti.</p>
                                    </div>
                                    <div class="checkbox"><input type="checkbox" class="icheck"></div>
                                </li>
                                <li>
                                    <div class="permission-des">
                                        <h4 class="p-name">Delete Profile Question </h4>
                                        <p class="p-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, deleniti.</p>
                                    </div>
                                    <div class="checkbox"><input type="checkbox" class="icheck"></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block"> Powered by : <a href="#" target="_blank">Innovia Group</a></span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
        </div>
    </footer>
    <!-- partial -->
</div>
<script>
    $(document).ready(function() {
        var table = $('#example').DataTable({
            'responsive': true
        });

        // Handle click on "Expand All" button
        $('#btn-show-all-children').on('click', function() {
            // Expand row details
            table.rows(':not(.parent)').nodes().to$().find('td:first-child').trigger('click');
        });

        // Handle click on "Collapse All" button
        $('#btn-hide-all-children').on('click', function() {
            // Collapse row details
            table.rows('.parent').nodes().to$().find('td:first-child').trigger('click');
        });
    });
</script>
<?php include('includes/footer.php'); ?>