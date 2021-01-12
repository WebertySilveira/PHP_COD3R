<div class="titulo">Integração com CSS</div>

<div center>
    <button dobro azul>
        <?= "Botão" ?>
    </button>
</div>


<style>
    button{
        padding: 5px <?= 2 * 10 ?>px;
        background-color: #4286f4;
        color: #EEEEEE;
        font-weight: bold;
        border-radius: 10px;
    }
    button:hover{
        color: #4286f4;
        background-color: #EEEEEE;
    }

    [center] {
        display:flex;
        justify-content:center;
        align-items:center;
    }
    [azul] {
        border: 2px solid blue;
    }
    [dobro] {
        font-size: 2rem;
    }


</style>