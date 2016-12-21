<!--MENU SECTION END-->
<div class="content-wrapper">
  <div class="container">
    <div class="row pad-botm">
      <div class="col-md-12">
        <h4 class="header-line">Artikel Penawaran</h4>
      </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th><?=anchor('admin/blogoffers/new','<i class="fa fa-file-o"></i><span class="hidden-xs link">New</span>','class="btn btn-warning btn-sm"')?></th>
                </tr>
                <?php 
            if(!isset($post)){
                echo "This page was accessed incorrectly";
            }else{ //display the post
                ?>
                <?php
                $no = 1;
                foreach($post as $r){
                    ?>
                    <tr>
                        <td><?=$no?></td>
                        <td>
                            <b><?=$r['post_title']?></b><hr>
                            <p><?php
                                echo substr($r['post'],0,100);
                                echo (strlen($r['post']) > 100)?'...':'';
                                ?>
                            </p>
                        </td>
                        <td><?=$r['author']?></td>
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
                            echo anchor('home/offers/'.$r['post_slug'],'<i class="fa fa-eye"></i><span class="hidden-xs link">Preview</span>','class="btn btn-primary btn-xs" title="Preview"');
                            echo anchor('admin/blogoffer/edit/'.$r['post_slug'],'<i class="fa fa-pencil-square-o"></i><span class="hidden-xs link">Edit</span>','class="btn btn-default btn-xs" title="Edit"');
                            echo anchor('admin/blogoffer/trash/'.$r['post_slug'],'<i class="fa fa-trash"></i><span class="hidden-xs link">Delete</span>','class="btn btn-danger btn-xs" title="Trash"');
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