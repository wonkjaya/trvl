<!--MENU SECTION END-->
<?php
if(!$type){
    $type = 'not-set';
}
?>
<div class="content-wrapper">
  <div class="container">
    <div class="row pad-botm">
      <div class="col-md-12">
        <h4 class="header-line"><?=(isset($label_title))?$label_title:'No Label'?></h4>
      </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
                <tr>
                    <th>#</th>
                    <th>Created</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th><?=anchor('admin/'.$type.'/new','<i class="fa fa-file-o"></i><span class="hidden-xs link">New</span>','class="btn btn-warning btn-sm"')?></th>
                </tr>
                <?php 
            if(!isset($post)){
                ?>
                <tr>
                    <th colspan="5"> Data Not Found </th>
                </tr>
                <?php
            }else{ //display the post
                ?>
                <?php
                $no = 1;
                foreach($post as $r){
                    ?>
                    <tr>
                        <td><?=$no?></td>
                        <td><?=$r->created?></td>
                        <td>
                            <b><?=$r->title?></b><hr>
                            <p><?php
                                echo $r->content;
                                echo (strlen($r->content) > 100)?'...':'';
                                ?>
                            </p>
                        </td>
                        <td><?=$r->author?></td>
                        <td>
                            <style>
                                .btn{
                                    margin-right:2px;
                                    margin-top:10px;
                                }
                                .link{
                                    margin-left:2px;
                                }
                            </style>
                            <?php
                            
                            echo anchor('home/'.$type.'/'.$r->slug,'<i class="fa fa-eye"></i><span class="hidden-xs link">Preview</span>','class="btn btn-primary btn-xs" title="Preview"');
                            echo anchor('admin/'.$type.'/edit/'.$r->slug,'<i class="fa fa-pencil-square-o"></i><span class="hidden-xs link">Edit</span>','class="btn btn-default btn-xs" title="Edit"');
                            echo anchor('admin/'.$type.'/trash/'.$r->slug,'<i class="fa fa-trash"></i><span class="hidden-xs link">Delete</span>','class="btn btn-danger btn-xs" title="Trash"');
                            ?>
                        </td>
                    </tr>
                    <?php
                    $no++;
                }
                ?>
                <?php
            }
                ?>
            </table>
        </div>
    </div>
  </div>
</div>
<!-- CONTENT-WRAPPER SECTION END-->