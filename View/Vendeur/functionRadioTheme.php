<?php



echo '
<style>
@import url(https://fonts.googleapis.com/css?family=Lato:400,300);
* {
  box-sizing: border-box;
}



input[type="radio"] {
  display: none;
}
input[type="radio"]:checked + label span {
  transform: scale(1.25);
}
input[type="radio"]:checked + label .',$donnees["nom"],' {
  border: 2px solid #711313;
}


label {
  display: inline-block;
  width: 25px;
  height: 25px;
  margin-right: 10px;
  cursor: pointer;
}
label:hover span {
  transform: scale(1.25);
}
label span {
  display: block;
  width: 100%;
  height: 100%;
  transition: transform 0.2s ease-in-out;
}
label span.',$donnees["nom"],' {
  background: ',$donnees["couleur"],';
}
</style>
<input type="radio" name="color" id="',$donnees["nom"],'" value="',$donnees["nom"],'" />
<label for="',$donnees["nom"],'"><span class="',$donnees["nom"],'"></span></label>
'
?>