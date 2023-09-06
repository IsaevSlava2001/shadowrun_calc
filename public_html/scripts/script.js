$(document).ready(function(){
    function getRandomInt(max)
    {
    return Math.floor(Math.random() * max);
    }
    $("#updweapon").on('input', function()
    {
        var weapon=$(this).val();
        var xhr=new XMLHttpRequest();
        xhr.open("GET","./back/select_weapon.php?weapon="+weapon,true);
        xhr.send();
        xhr.onreadystatechange=function()
        {
            if(xhr.readyState!=4)
            {
                return;
            }
            if(xhr.status==200)
            {
                if(xhr.responseText!="no such weapon")
                {
                    console.log(xhr.responseText);
                    stat = xhr.responseText.split('"');
                    let stats = [];
                    for(var i=0;i<stat.length;i++)
                    {
                        if(i%2!=0)
                        {
                            stats.push(stat[i]);
                        }
                    }
                    for (k in stats)
                    {
                        console.log(stats[k]);
                    }
                    $("#Label1").text(stats[0]);
                    $("#Label7").text(stats[0]);
                    $("#Label2").text(stats[3]);
                    $("#Label4").text(stats[2]);
                    $('#type').text(stats[4]);
                    if(parseInt(stats[1])==1)
                    {
                        $("#Label11").text("phys");
                    }
                    else
                    {
                        $("#Label11").text("stan");
                    }
                }
            }
        }
    });  
    $("#updcat").on('input', function()
    {
        var categ=$(this).val();
        var xhr=new XMLHttpRequest();
        xhr.open("GET","./back/update_weapon.php?categ="+categ,true);
        xhr.send();
        xhr.onreadystatechange=function()
        {
            if(xhr.readyState!=4)
            {
                return;
            }
            if(xhr.status==200)
            {
                if(xhr.responseText!="no such weapon"&& xhr.responseText!="")
                {
                    weapon = xhr.responseText.split('"');
                    let weapons = ["--Please choose an option--"];
                    for(var i=0;i<weapon.length;i++)
                    {
                        if(i%2!=0)
                        {
                            weapons.push(weapon[i]);
                        }
                    }
                    select = document.getElementById('updweapon');
                    select.options.length = 0;
                    for (weap in weapons)
                    {
                        console.log(weap);
                        if (weapons.hasOwnProperty(weap))
                        {
                            select.options.add(new Option(weapons[weap], weapons[weap]));
                        }
                    }
                }
                else if(xhr.responseText=="")
                {
                    let weapons = ["--Please choose an option--"];
                    select = document.getElementById('updweapon');
                    select.options.length = 0;
                    for (weap in weapons)
                    {
                        console.log(weap);
                        if (weapons.hasOwnProperty(weap))
                        {
                            select.options.add(new Option(weapons[weap], weapons[weap]));
                        }
                    }
                }
                else
                {

                }
            }
        }
    });
    $("#atackcount").click(function()
    {
        var u = document.getElementsByName('Text2')[0].value;
        if(u=="" && document.getElementById("Label4").textContent=="")
        {
            alert("Please enter count of dices in field Attack dicepool and select weapon");
        }
        else if(u=="")
        {
            alert("Please enter count of dices in field Attack dicepool");
        }
        else if(document.getElementById("Label4").textContent=="")
        {
            alert("Please select weapon");
        }
        else
        {
            console.log(u);
            sum = 0;
            msg = "results of throws: ";
            var j = 0;
            for (var i=0;i<parseInt(u);i++)
            {
                rez = getRandomInt(7);
                if(rez == 0) rez = 1;
                if(j<=u)
                {
                    if(rez>4)
                    {
                        sum += 1;
                        msg += rez + "(success)";
                    }
                    else
                    {
                        msg += rez + "(fail)";
                    }
                    msg += " + ";   
                    j +=1
                }
                else
                {
                    if(rez>4)
                    {
                        sum += 1;
                        msg += rez + "(success)";
                    }
                    else
                    {
                        msg += rez + "(fail)";
                    }
                }
            j +=1
            }
            msg += " = "+sum;
            alert(msg);
            if(sum>parseInt(document.getElementById("Label4").textContent))
            {
                document.getElementById("Label3").innerText=parseInt(document.getElementById("Label4").textContent);
            }
            else
            {
                document.getElementById("Label3").innerText=sum;
            }
        }
    })
    $("#dodgecount").click(function()
    {
        var u = document.getElementsByName('Text3')[0].value;
        if(u=="")
        {
            alert("Please enter count of dices in field Dodge dicepool and select weapon");
        }
        else
        {
            console.log(u);
            sum = 0;
            msg = "results of throws: ";
            var j = 0;
            u=parseInt(u);
            for (var i=0;i<parseInt(u);i++)
            {
                rez = getRandomInt(7);
                if(rez == 0) rez = 1;
                if(j<=u)
                {
                    if(rez>4)
                    {
                        sum += 1;
                        msg += rez + "(success)";
                    }
                    else
                    {
                        msg += rez + "(fail)";
                    }
                    msg += " + ";   
                    j +=1
                }
                else
                {
                    if(rez>4)
                    {
                        sum += 1;
                        msg += rez + "(success)";
                    }
                    else
                    {
                        msg += rez + "(fail)";
                    }
                }
            j +=1
            }
            msg += " = "+sum;
            alert(msg);
            document.getElementById("Label5").innerText=sum;
        }
    })
    $("#resistcount").click(function()
    {
        if(document.getElementById("Label2").textContent=="")
        {
            alert("select weapon");
        }
        else
        {
            var j = document.getElementsByName('Text4')[0].value;
            if(j=="")
            {
                alert("Please enter count of dices in field Dodge dicepool");
            }
            else
            {
                console.log(j);
                u = parseInt(j) + parseInt(document.getElementById("Label2").textContent)
                sum = 0;
                msg = "results of throws: ";
                var j = 0;
            for (var i=0;i<parseInt(u);i++)
            {
                rez = getRandomInt(7);
                if(rez == 0) rez = 1;
                if(j<=u)
                {
                    if(rez>4)
                    {
                        sum += 1;
                        msg += rez + "(success)";
                    }
                    else
                    {
                        msg += rez + "(fail)";
                    }
                    msg += " + ";   
                    j +=1
                }
                else
                {
                    if(rez>4)
                    {
                        sum += 1;
                        msg += rez + "(success)";
                    }
                    else
                    {
                        msg += rez + "(fail)";
                    }
                }
            j +=1
            }
            msg += " = "+sum;
                alert(msg);
                document.getElementById("Label9").innerText=sum;
            }
        }
    })
    $("#countdamage").click(function()
    {
        errmsg = "";
        var a = document.getElementsByName('Select2')[0].value;
        var d = document.getElementById("Label3").textContent
        var e = document.getElementById("Label5").textContent
        var g = document.getElementById("Label9").textContent
        var h = document.getElementsByName('Text1')[0].value;
        if(a == "") errmsg +=" select weapon\n";
        if(d == "") errmsg +=" count damage\n";
        if(e == "") errmsg +=" count dodge\n";
        if(g == "") errmsg +=" count resist\n";
        if(h == "") errmsg +=" input strength ";
        if(errmsg == "")
        {
            var y = document.getElementById("Label6").innerText = document.getElementById("Label8").innerText = parseInt(d) - parseInt(e);
            if(y>0)
            {
                if(parseInt(document.getElementById("type").textContent)==1)
                {
                    document.getElementById("Label10").innerText = parseInt(document.getElementById("Label7").textContent) + y + parseInt(document.getElementsByName('Text1')[0].value) - parseInt(g);
                }
                else
                {
                    document.getElementById("Label10").innerText = parseInt(document.getElementById("Label7").textContent) + y - parseInt(g);
                }
            }
            else
            {
                document.getElementById("Label10").innerText="0";
                document.getElementById("Label11").innerText="";
            }
        }
        else
        {
            alert(errmsg);
        }
    })
})