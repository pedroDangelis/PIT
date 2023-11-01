function mascara_telefone()
{ var telefone_formatado = document.getElementById("telefone").value
    if (telefone_formatado[0]!="(")
    {
        if (telefone_formatado[0]!=undefined)
        {
            document.getElementById("telefone").value=telefone_formatado.slice(0,0)+"("+telefone_formatado[0];
        }
    }

    if (telefone_formatado[3]!=")")
    {
        if (telefone_formatado[3]!=undefined)
        {
            document.getElementById("telefone").value=telefone_formatado.slice(0,3)+")"+telefone_formatado[3];
        }
    }

    if (telefone_formatado[9]!="-")
    {
        if (telefone_formatado[9]!=undefined)
        {
            document.getElementById("telefone").value=telefone_formatado.slice(0,9)+"-"+telefone_formatado[9];
        }
    }
}


function mascara_rg()
{ var rg_formatado = document.getElementById("rg").value
    if (rg_formatado[2]!="-")
    {
        if (rg_formatado[2]!=undefined)
        {
            document.getElementById("rg").value=rg_formatado.slice(0,2)+"-"+rg_formatado[2];
        }
    }


    if (rg_formatado[5]!=".")
    {
        if (rg_formatado[5]!=undefined)
        {
            document.getElementById("rg").value=rg_formatado.slice(0,5)+"."+rg_formatado[5];
        }
    }

    if (rg_formatado[9]!=".")
    {
        if (rg_formatado[9]!=undefined)
        {
            document.getElementById("rg").value=rg_formatado.slice(0,9)+"."+rg_formatado[9];
        }
    }
}