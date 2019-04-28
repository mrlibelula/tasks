@if($errors->any())
<style>
    .container {
        margin-bottom: 20px;
    }

    .notification > button.delete {
        border: none;
    }

    .is-hidden {
        display: none;
    }
</style>

<div class="container">
    <div class="columns">
        <div class="column">
            <div class="notification is-danger is-small">
                <h5 class="subtitle"><strong style="color:white">There were some problems</strong></h5>
                <button class="delete"></button>
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
    var deleteButtons = document.getElementsByClassName('delete');
    for (var i = 0; i < deleteButtons.length; i++) {
        deleteButtons[i].addEventListener('click', dismiss); 
    }
    function dismiss(e) {
        this.parentNode.classList.add('is-hidden');
    }
</script>
@endif