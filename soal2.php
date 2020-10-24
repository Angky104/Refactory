
<form action="" method="post">
    <label>Input</label> 
    <input type="text" name="name" id="input"><br>
    <label>Output : </label><label id="hasil"></label><br>
    <button type="button" onclick="reverse()">Reverse</button>
    <button type="button" onclick="undoRedo()">Undo/Redo</button>
</form>

<script>
    
    var undo= true;
    var input="";
    function reverse(){
        var str = document.getElementById('input').value;
        var currentString = str;
        var newString = "";
        before = str;
        for (let i = str.length - 1; i >= 0; i--) {
            newString = newString + currentString[i];
        }

        document.getElementById('hasil').innerHTML = "";
        document.getElementById('hasil').innerHTML = newString;
    }
    function undoRedo(){
        if (undo==true) {
            input = document.getElementById('input').value;
            document.getElementById('input').value = "";
            undo = false;
        }else{
            document.getElementById('input').value = input;
            undo = true;
        }   
        
    }

</script>

