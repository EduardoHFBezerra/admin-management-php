<div class="form-group">
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
</div>
<div class="form-group">
    <label for="name">Nome: <sup>*</sup></label>
    <input type="text" name="name" class="form-control form-control <?php echo (!empty($data['name_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['name']; ?>">
    <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
</div>
<div class="form-group">
    <label for="name">Data de aniversário: <sup>*</sup></label>
    <input type="text" id='datepicker' name="birth_date" class="form-control form-control <?php echo (!empty($data['birth_date_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['birth_date']; ?>">
    <span class="invalid-feedback"><?php echo $data['birth_date_err']; ?></span>
</div>
<div class="form-group">
    <label for="name">CPF: <sup>*</sup></label>
    <input id="CPF" type="text" name="CPF" class="form-control form-control <?php echo (!empty($data['CPF_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['CPF']; ?>">
    <span class="invalid-feedback"><?php echo $data['CPF_err']; ?></span>
</div>
<div class="form-group">
    <label for="name">Telefone: <sup>*</sup></label>
    <input id="phone" type="text" name="phone" class="form-control form-control <?php echo (!empty($data['phone_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['phone']; ?>">
    <span class="invalid-feedback"><?php echo $data['phone_err']; ?></span>
</div>