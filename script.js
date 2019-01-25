<script type="text/javascript">
 function validaForm()
 {
    erro = false;
    if($('#nome').val() == '')
    {
        alert('Voc&ecirc; precisa preencher o campo Nome');erro = true;
    }
    if($('#email').val() == '' &amp;&amp; !erro)
    {
        alert('Voc&ecirc; precisa preencher o campo E-mail');erro = true;
    }
    if($('#mensagem').val() == '' &amp;&amp; !erro)
    {
        alert('Voc&ecirc; precisa preencher o campo Mensagem');erro = true;
    }

    //se nao tiver erros
    if(!erro)
    {
        $('#formulario_contato').submit();
    }
 }
</script>