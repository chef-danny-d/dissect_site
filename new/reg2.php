<?php
session_start();
include "head.php";
include "menu.php";
include "nav.php";
include "bread.php";
include "script.php";
include "var.php";
include "connect.php";
?>
<section class="main-cont">
    <script>
        function updateTextInputOne(valOne) {
            document.getElementById('textInputOne').value=valOne;
        }
        function updateTextInputTwo(valTwo) {
            document.getElementById('textInputTwo').value=valTwo;
        }
        function updateTextInputThree(valThree) {
            document.getElementById('textInputThree').value=valThree;
        }
        function updateTextInputFour(valFour) {
            document.getElementById('textInputFour').value=valFour;
        }
        function updateTextInputFive(valFive) {
            document.getElementById('textInputFive').value=valFive;
        }
        function updateTextInputSix(valSix) {
            document.getElementById('textInputSix').value=valSix;
        }
        function updateTextInputSeven(valSeven) {
            document.getElementById('textInputSeven').value=valSeven;
        }
        function updateTextInputEight(valEight) {
            document.getElementById('textInputEight').value=valEight;
        }
    </script>

    <form action="dist.insert.php" method="post">
        <label>
            <input type="text" name="d1n" placeholder="Name of drive 1">
            <label>Partitioning percentage of drive 1</label>
            <input type="range"  min="0" max="100" value="0" onchange="updateTextInputOne(this.value);">
            <input type="text" id="textInputOne" name="textInputOne" value="0" placeholder="0">
        </label>
        <br>
        <label>
            <input type="text" name="d2n" placeholder="Name of drive 2">
            <label>Partitioning percentage of drive 2</label>
            <input type="range"  min="0" max="100" value="0" onchange="updateTextInputTwo(this.value);">
            <input type="text" id="textInputTwo" name="textInputTwo" value="0">
        </label>
        <br>
        <label>
            <input type="text" name="d3n" placeholder="Name of drive 3">
            <label>Partitioning percentage of drive 3</label>
            <input type="range"  min="0" max="100" value="0" onchange="updateTextInputThree(this.value);">
            <input type="text" id="textInputThree" name="textInputThree" value="0">
        </label>
        <br>
        <label>
            <input type="text" name="d4n" placeholder="Name of drive 4">
            <label>Partitioning percentage of drive 4</label>
            <input type="range"  min="0" max="100" value="0" onchange="updateTextInputFour(this.value);">
            <input type="text" id="textInputFour" name="textInputFour" value="0">
        </label>
        <br>
        <label>
            <input type="text" name="d5n" placeholder="Name of drive 5">
            <label>Partitioning percentage of drive 5</label>
            <input type="range"  min="0" max="100" value="0" onchange="updateTextInputFive(this.value);">
            <input type="text" id="textInputFive" name="textInputFive" value="0">
        </label>
        <br>
        <label>
            <input type="text" name="d6n" placeholder="Name of drive 6">
            <label>Partitioning percentage of drive 6</label>
            <input type="range"  min="0" max="100" value="0" onchange="updateTextInputSix(this.value);">
            <input type="text" id="textInputSix" name="textInputSix" value="0">
        </label>
        <br>
        <label>
            <input type="text" name="d7n" placeholder="Name of drive 7">
            <label>Partitioning percentage of drive 7</label>
            <input type="range"  min="0" max="100" value="0" onchange="updateTextInputSeven(this.value);">
            <input type="text" id="textInputSeven" name="textInputSeven" value="0">
        </label>
        <br>
        <label>
            <input type="text" name="d8n" placeholder="Name of drive 8">
            <label>Partitioning percentage of drive 8</label>
            <input type="range"  min="0" max="100" value="0" onchange="updateTextInputEight(this.value);">
            <input type="text" id="textInputEight" name="textInputEight" value="0">
        </label>
        <br>
        <button type="submit">Upload</button>
    </form>
</section>
<?php include_once "footer.php"; ?>