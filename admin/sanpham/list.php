<div class="row2">
    <div class="row2 font_title">
          <h1>DANH SÁCH LOẠI SẢN PHẨM</h1>
         </div>
         <div class="timkiem">
            <form action="index.php?act=listSp" method="POST">
            <div class="tim_kiem"><input type="text" name= "kyw"></div>
            <div class="tim_kiem"><select name="id_dm" ></div>
            <option value="0">Tất Cả</option>
                        <?php 
                        foreach($tendanhmuc as $danhmuc){
                            extract($danhmuc);  
                            echo '<option value="'.$id_dm.'">'.$name.'</option>';
                        } 
                    ?>
                    </select>
                    <div class="go"><input type="submit" name="listok" value= "GO"></div>
            </form>
        </div>
        


          <form action="#" method="POST">
           <div class="row2 mb10 formds_loai">
           <table>
             
                    <tr>
                        <!-- <th></th> -->
                        <th>Tên sản phẩm</th>
                        <th>Giá gốc </th>
                        <th>Giá khuyến mãi</th>
                        <th>View</th>
                        <th>Mô tả</th>
                        <th> Ảnh</th>
                        <th>Chức năng</th>
                    </tr>
                
            <?php 
                foreach($listsanpham as $sanpham){
                    extract($sanpham);
                    $suasp = 'index.php?act=suasp&id='.$id_sp;
                    $xoasp = 'index.php?act=deleteSp&id='.$id_sp;
                    $ctsp = 'index.php?act=ctsp&id='.$id_sp;
                    $hinhpath= "../images/".$img;
                    if(is_file($hinhpath)){
                        $hinh = "<img src= '".$hinhpath."' height ='100px'>";
                    }else {
                        $hinh = "Chưa update hình ảnh";
                    }

                    echo ' <tr>
                            <td>'.$name_sp.'</td>
                            <td>'.$gia_goc.'</td>
                            <td>'.$gia_km.'</td>
                            <td>'.$view.'</td>
                            <td>'.$mo_ta.'</td>
                            <td> '.$hinh.'</td>
                            <td><div class="sua_xoa"><div class="sua"><a href="'.$suasp.'"><input type="button" value="Sửa"></a></div><div class="xoa"><a href="'.$xoasp.'" onclick="return confirm(\'Bạn có chắc muốn xóa không?\')"><input type="button" value="Xóa"></a></div></div> <div class="ctsp"<a href="'.$ctsp.'"><input type="button" value="Thêm chi tiết sản phẩm"></a></div></td>
                            </tr>';
                }
            ?> 

           
           </table>
           </div>
           <div class="row mb10 ">
                <input class="mr20" type="button" value="CHỌN TẤT CẢ">
                <input  class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
                <a href="index.php?act=addsp"> <input  class="mr20" type="button" value="NHẬP THÊM"></a>
           </div>
          </form>
                        <!----------------------- Phân trang ----------------------->
                        <nav id="pagination" class="pagination_wrap pagination_pages">
                                <?php
                                if ($current_page > 1 && $total_page > 1){
                                    echo '<a class="pager_prev" href="index.php?act=listSp&page='.($current_page-1).'"></a> ';
                                }
                                for ($i = 1; $i <= $total_page; $i++){
                                    
                                    if ($i == $current_page){
                                        echo ' <span class="pager_current active ">'.$i.'</span>';
                                    }
                                    else{
                                        echo '<a href="index.php?act=listSp&id_dm='.$id_dm.'&page='.$i.'">'.$i.'</a>';
                                    }
                                }
                                    ?>
                         </nav>
         </div>
</div>
</div> 