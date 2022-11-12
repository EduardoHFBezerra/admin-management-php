<div class="mb-3 form-floating">
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
</div>
<div class="mb-3 form-floating">
    <input type="text" name="name" class="form-control <?php echo (!empty($data['name_err'])) ? 'is-invalid' : '';?>" placeholder="Nome" value="<?php echo $data['name']; ?>">
    <label for="name">Nome</label>
    <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
</div>
<div class="mb-3 form-floating">
    <input type="text" id='datepicker' name="birth_date" class="form-control <?php echo (!empty($data['birth_date_err'])) ? 'is-invalid' : '';?>" placeholder="Data de aniversário" value="<?php echo $data['birth_date']; ?>">
    <label for="birth_date">Data de aniversário</label>
    <span class="invalid-feedback"><?php echo $data['birth_date_err']; ?></span>
</div>
<div class="mb-3 form-floating">
    <input id="CPF" type="text" name="CPF" class="form-control <?php echo (!empty($data['CPF_err'])) ? 'is-invalid' : '';?>" placeholder="CPF" value="<?php echo $data['CPF']; ?>">
    <label for="CPF">CPF</label>
    <span class="invalid-feedback"><?php echo $data['CPF_err']; ?></span>
</div>
<div class="mb-3 form-floating">
    <input id="phone" type="text" name="phone" class="form-control <?php echo (!empty($data['phone_err'])) ? 'is-invalid' : '';?>" placeholder="Telefone" value="<?php echo $data['phone']; ?>">
    <label for="phone">Telefone</label>
    <span class="invalid-feedback"><?php echo $data['phone_err']; ?></span>
</div>