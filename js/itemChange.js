function showAdd()
{
	add.style.display = "block";
	del.style.display = "none";
	trim.style.display = "none";
}
function showDel()
{
	add.style.display = "none";
	del.style.display = "block";
	trim.style.display = "none";
}
function showTrim()
{
	add.style.display = "none";
	del.style.display = "none";
	trim.style.display = "block";
}

/*

function checkAdd(num)
{
	var ok = 1;
	var text = new Array(num);
	for (var i=0;i<text.length ;i++ )
	{
		text[i] = document.getElementById("add-label"+(i+1)).value;	

		if(text[i] == '')
		{
			ok = 0;
		}

	}
	if(ok == 0)
	{
		alert("One text is null");
	}
	else
	{
		alert("Have been added.");
	}
}

function checkDel(num)
{
	var ok = 1;
	var text = new Array(num);
	for (var i=0;i<text.length ;i++ )
	{
		text[i] = document.getElementById("delete-label"+(i+1)).value;	

		if(text[i] == '')
		{
			ok = 0;
		}

	}
	if(ok == 0)
	{
		alert("One text is null");
	}
	else
	{
		alert("Have been deleted.");
	}
}

function checkTrim(num)
{
	var ok = 1;
	var text = new Array(num);
	for (var i=0;i<text.length ;i++ )
	{
		text[i] = document.getElementById("trim-label"+(i+1)).value;	

		if(text[i] == '')
		{
			ok = 0;
		}

	}
	if(ok == 0)
	{
		alert("One text is null");
	}
	else
	{
		alert("Have been trimed.");
	}
}
*/