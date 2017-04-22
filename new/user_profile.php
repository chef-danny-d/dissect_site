<?php
session_start();
include "funtion.php" ;
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
    <label>Drive 1
    <input type="range"  min="0" max="100" value="0" onchange="updateTextInputOne(this.value);">
    <input type="text" id="textInputOne" name="textInputOne" value="0">
    </label>
    <br>
    <label>Drive 2
    <input type="range"  min="0" max="100" value="0" onchange="updateTextInputTwo(this.value);">
    <input type="text" id="textInputTwo" name="textInputTwo" value="0">
    </label>
    <br>
      <label>Drive 3
    <input type="range"  min="0" max="100" value="0" onchange="updateTextInputThree(this.value);">
    <input type="text" id="textInputThree" name="textInputThree" value="0">
      </label>
    <br>
        <label>Drive 4
    <input type="range"  min="0" max="100" value="0" onchange="updateTextInputFour(this.value);">
    <input type="text" id="textInputFour" name="textInputFour" value="0">
        </label>
    <br>
          <label>Drive 5
    <input type="range"  min="0" max="100" value="0" onchange="updateTextInputFive(this.value);">
    <input type="text" id="textInputFive" name="textInputFive" value="0">
          </label>
    <br>
            <label>Drive 6
    <input type="range"  min="0" max="100" value="0" onchange="updateTextInputSix(this.value);">
    <input type="text" id="textInputSix" name="textInputSix" value="0">
            </label>
    <br>
              <label>Drive 7
    <input type="range"  min="0" max="100" value="0" onchange="updateTextInputSeven(this.value);">
    <input type="text" id="textInputSeven" name="textInputSeven" value="0">
              </label>
    <br>
                <label>Drive 8
    <input type="range"  min="0" max="100" value="0" onchange="updateTextInputEight(this.value);">
    <input type="text" id="textInputEight" name="textInputEight" value="0">
                </label>
    <br>
    <button type="submit">Submit</button>
  </form>
</section>
<?php include "footer.php";?>