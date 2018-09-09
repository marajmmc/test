<style>
    table {
        border-collapse: separate;
        border-spacing: 0;
        border-top: 1px solid grey;
    }

    td, th {
        margin: 0;
        border: 1px solid grey;
        white-space: nowrap;
        border-top-width: 0px;
    }

    div {
        width: 500px;
        overflow-x: scroll;
        margin-left: 5em;
        overflow-y: visible;
        padding: 0;
    }

    .headcol {
        position: absolute;
        width: 5em;
        left: 0;
        top: auto;
        border-top-width: 1px;
        /*only relevant for first row*/
        margin-top: -1px;
        /*compensate for top border*/
    }

    .headcol:before {
        content: 'Row ';
    }

    .long {
        background: yellow;
        letter-spacing: 1em;
    }
</style>
<div>
    <table>
        <tr><th class="headcol">1</th><td class="long">QWERTYUIOPASDFGHJKLZXCVBNM</td><td class="long">QWERTYUIOPASDFGHJKLZXCVBNM</td></tr>
        <tr><th class="headcol">2</th><td class="long">QWERTYUIOPASDFGHJKLZXCVBNM</td><td class="long">QWERTYUIOPASDFGHJKLZXCVBNM</td></tr>
        <tr><th class="headcol">3</th><td class="long">QWERTYUIOPASDFGHJKLZXCVBNM</td><td class="long">QWERTYUIOPASDFGHJKLZXCVBNM</td></tr>
        <tr><th class="headcol">4</th><td class="long">QWERTYUIOPASDFGHJKLZXCVBNM</td><td class="long">QWERTYUIOPASDFGHJKLZXCVBNM</td></tr>
        <tr><th class="headcol">5</th><td class="long">QWERTYUIOPASDFGHJKLZXCVBNM</td><td class="long">QWERTYUIOPASDFGHJKLZXCVBNM</td></tr>
        <tr><th class="headcol">6</th><td class="long">QWERTYUIOPASDFGHJKLZXCVBNM</td><td class="long">QWERTYUIOPASDFGHJKLZXCVBNM</td></tr>
    </table>
</div>