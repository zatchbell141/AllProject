<!DOCTYPE html>
<html>
<head>
    <title>Compare</title>
    <style type="text/css">
        ins {
    text-decoration: none;
    background-color: #d4fcbc;
}

del {
    text-decoration: line-through;
    background-color: #fbb6c2;
    color: #555;
}
    </style>
</head>
<body>


<script type="text/javascript">
    let originalHTML = `<?php echo htmlentities(readfile("RAJASLU CEMENT.htm"));?>`;

let newHTML = `<?php echo htmlentities(readfile("RAJASLU CEMENT1.htm"));?>
`;

// Diff HTML strings
let output = htmldiff(originalHTML, newHTML);

// Show HTML diff output as HTML (crazy right?)!
document.getElementById("output").innerHTML = output;
</script>
</body>
</html>






