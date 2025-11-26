<?php
$flowers = [
    [
        'name' => 'Hoa Hải Đường ',
        'desc'    => 'Dạ yến thảo là lựa chọn thích hợp cho những ai yêu thích trồng hoa làm đẹp nhà ở. Hoa có thể nở rực quanh năm, kể cả tiết trời se lạnh của mùa xuân hay cả những ngày nắng nóng cao điểm của mùa hè. Dạ yến thảo được trồng ở chậu treo nơi cửa sổ hay ban công, dáng hoa mềm mại, sắc màu đa dạng nên được yêu thích vô cùng.',
        'img' => 'haiduong.jpg',
        
    ],
    [      
        'name' => 'Hoa Đỗ Quyên',
        'desc'    => 'Hoa đồng tiền thích hợp để trồng trong mùa xuân và đầu mùa hè, khi mà cường độ ánh sáng chưa quá mạnh. Cây có hoa to, nở rộ rực rỡ, lại khá dễ trồng và chăm sóc nên sẽ là lựa chọn thích hợp của bạn trong tiết trời này. Về mặt ý nghĩa, hoa đồng tiền cũng tượng trưng cho sự sung túc, tình yêu và hạnh phúc viên mãn.',
        'img' => 'doquyen.jpg',
    ],
    [      
        'name' => 'Hoa Mai',
        'desc'    => 'Hoa giấy có mặt ở hầu khắp mọi nơi trên đất nước ta, thích hợp với nhiều điều kiện sống khác nhau nên rất dễ trồng, không tốn quá nhiều công chăm sóc nhưng thành quả mang lại sẽ khiến bạn vô cùng hài lòng. Hoa giấy mỏng manh nhưng rất lâu tàn, với nhiều màu như trắng, xanh, đỏ, hồng, tím, vàng… cùng nhiều sắc độ khác nhau. Vào mùa khô hanh, hoa vẫn tươi sáng trên cây khiến ngôi nhà luôn luôn bừng sáng.',
        'img' => 'mai.jpg',
    ],
    [      
        'name' => 'Hoa Tường Vy',
        'desc'    => 'Mang dáng hình tao nhã, màu sắc thiên thanh dịu dàng của hoa thanh tú có thể khiến bạn cảm thấy vô cùng nhẹ nhàng khi nhìn ngắm. Cây khá dễ trồng, lại nở nhiều hoa cùng một lúc, từ một bụi nhỏ có thể đâm nhánh, tạo nên những cây con phát triển sum suê. Thanh tú trồng ở nơi có nắng sẽ ra hoa nhiều, vì thế thích hợp trong cả mùa xuân lẫn mùa hè, đem lại khoảng không gian xanh mát cho ngôi nhà ngày oi nóng.',
        'img' => 'tuongvy.jpg',
    ],
    

];
?>

<?php foreach($flowers as $f): ?>
    <div class="flower">
        <h2><?= $f['name'] ?></h2>
        <img src="images/<?= $f['img'] ?>" width="300">
        <p><?= $f['desc'] ?></p>
        <hr>
    </div>
<?php endforeach; ?>

