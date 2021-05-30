<?php
include 'include/dbh.php';
?>
<div class="panel panel-default">
                        <div class="panel-heading">
                          <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> Add Attendance</a>
                        </div>
                     <!-- Modal -->
                     <?php include 'modal/attendance_modal.php'; ?>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">   
                                 <thead>
                                  <th class="hidden"></th>
                                  <th>Employee ID</th>
                                  <th>Employee Name</th>
                                  <th>Time In</th>
                                  <th>Time Out</th>
                                  <th>Status</th>
                                  <th>Date</th>
                                  <th>Action</th>
                                </thead>
                                <tbody>
                                  <?php
                                    $sql = "SELECT *, employee_records.employee_id AS emp_id, employee_attendance.id AS attend FROM employee_attendance LEFT JOIN employee_records ON employee_records.emp_id=employee_attendance.employee_id ORDER BY employee_attendance.date_attendance DESC, employee_attendance.time_in DESC";
                                    $query = $conn->query($sql);
                                    while($row = $query->fetch_assoc()){
                                      $status = ($row['status'])?'<button type="" class="btn btn-success btn-xs"><i class="fa fa-user-clock"></i> On Time</button>':'<button type="" class="btn btn-danger btn-xs">Late</button>';
                                      echo "
                                        <tr>
                                           <td class='hidden'></td>
                                           <td>".$row['emp_id']."</td>
                                           <td>".htmlentities($row['first_name'].' '.$row['last_name'])."</td>
                                           <td>".date('h:i A', strtotime(htmlentities($row['time_in'])))."</td>
                                           <td>".date('h:i A', strtotime(htmlentities($row['time_out'])))."</td>
                                           <td>".$status."</td>
                                           <td>".date('M d, Y', strtotime(htmlentities($row['date_attendance'])))."</td>
                                          <td>
                                            <button class='btn btn-info btn-sm btn-flat edit' data-id='".htmlentities($row['attend'])."'><i class='fa fa-edit'></i> Edit</button>
                                            <button class='btn btn-danger btn-sm btn-flat delete' data-id='".htmlentities($row['attend'])."'><i class='fa fa-trash'></i> Delete</button>
                                          </td>
                                        </tr>
                                      ";
                                    }
                                  ?>
                                </tbody>
                              </table>
                            </div> 
                        </div>