<x-header :pageName="$page_name"/>


<style>
    .thanks-container {
        height: 100vh;
        display: grid;
        place-content: center;
        text-align: center;
    }

    .thanks-container .message {
        width: 300px;
        height: 300px;
        text-align: center;
        background-color: #f2f3f2;
        margin-bottom: 35px;
        padding-top: 1rem;
        color: var(--Text, #000);
        font-family: Inter;
        font-size: 16px;
        font-style: normal;
        font-weight: 400;
        text-transform: capitalize;
        margin-inline: auto;
    }

    .thanks-container button {
        width: 363px;
        height: 52px;
        border-radius: 4px;
        display: block;
        background: #fd9802;
        color: var(--Background, #FFF);
        text-align: center;
        font-family: Inter;
        font-size: 16px;
        font-style: normal;
        font-weight: 700;
    }

    .thanks-container button:hover {
        filter: brightness(1.1);
    }

    .thanks-container .generate-receipt {
        color: var(--Text-2, #9DA3A1);
        font-family: Inter;
        font-size: 16px;
        font-style: normal;
        font-weight: 700;
        margin-top: 33px;
        display: block;
        cursor: pointer;
    }
</style>
<div class="container-fluid thanks-container">

    <div class="thanks-wrapper">
        <div class="message">
            <span>thank you for your purchase</span>
        </div>
        <button>check it from here</button>
        <span class="generate-receipt">Generate Receipt</span>
    </div>

</div>







<script id="pageJsFile" src="js/{{$page_name}}.js"></script>
<script src="js/general.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

</body>

</html>