<section id="info">
    <div class="container text-center">
        <p>
            Tu vas maintenant commencer une incroyable partie de Memory&nbsp;!
        </p>
        <p>
            La partie se terminera lorsque tu auras retrouvé toutes les paires ou bien au bout de <?php echo $this->data['game_duration']; ?> minutes si tu n'as pas trouvé toutes les paires...
        </p>
    </div>
</section>

<section id="form" class="text-center">
    <form action="" method="post" name="login" id="login" class="container <?php echo (isset($this->data['form_error']) ? 'was-validated' : ''); ?>" novalidate="" enctype="multipart/form-data" accept-charset="utf-8">
        <div class="form-group col-md-6 offset-md-3 col-8 offset-2">
            <label for="name">Indique ton nom pour commencer la partie&nbsp;:</label>
            <input type="text" name="name" value="" required="" class="form-control" id="name" placeholder="Nom" maxlength="25">
            <?php echo (isset($this->data['form_error']) ? '<p id="name-help" class="help-block text-danger">' . $this->data['form_error'] . '</p>' : ''); ?>
        </div>
        <button type="submit" class="btn btn-danger">Lancer la partie</button>
    </form>
</section>