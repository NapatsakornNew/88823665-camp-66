<h1>คำนวนผลคูณ</h1>
<form method="post"
action="<?php echo e(url('mycontroller')); ?>">
<?php echo csrf_field(); ?>
<form action="php_03.php" method="post">
    <div class="mb-3">
        <label for="num" class="form-label">แม่สูตรคูณ</label>
        <input type="number" class="form-control" id="num" name="num">
    </div>
</form>
<table class="table table-bordered mt-3">
    <thead>
        <tr>
            <th>ตัวคูณ</th>
            <th>ผลลัพธ์</th>
        </tr>
    </thead>
    <tbody>
        <?php
            if(isset($_POST['num'])){
                $num = $_POST['num'];
                for($i=1; $i<=12; $i++){
                    $result = $num*$i;
                    echo "<tr>";
                    echo "<td>$num x $i</td>";
                    echo "<td>$result</td>";
                    echo "</tr>";
                }
            }
        ?>
    </tbody>
</table>
</form>
<?php /**PATH C:\xampp\htdocs\88823665-camp-66\mylaravel\resources\views/myview.blade.php ENDPATH**/ ?>