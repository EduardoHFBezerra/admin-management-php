<div class="mb-3 form-floating">
    <input type="text" name="description" class="form-control <?php echo (!empty($data['description_err'])) ? 'is-invalid' : '';?>" placeholder="Descrição" value="<?php echo $data['description']; ?>">
    <label for="description">Descrição</label>
    <span class="invalid-feedback"><?php echo $data['description_err']; ?></span>
</div>
<div class="mb-3 form-floating">
    <input id="cep" type="text" name="cep" class="form-control <?php echo (!empty($data['cep_err'])) ? 'is-invalid' : '';?>" placeholder="CEP" value="<?php echo $data['cep']; ?>">
    <label for="cep">CEP</label>
    <span class="invalid-feedback"><?php echo $data['cep_err']; ?></span>
</div>
<div class="mb-3 form-floating">
    <input id="street" type="text" name="street" class="form-control <?php echo (!empty($data['street_err'])) ? 'is-invalid' : '';?>" placeholder="Rua" value="<?php echo $data['street']; ?>">
    <label for="street">Rua</label>
    <span class="invalid-feedback"><?php echo $data['street_err']; ?></span>
</div>
<div class="mb-3 form-floating">
    <input id="number" type="text" name="number" class="form-control <?php echo (!empty($data['number_err'])) ? 'is-invalid' : '';?>" placeholder="Número" value="<?php echo $data['number']; ?>">
    <label for="number">Número</label>
    <span class="invalid-feedback"><?php echo $data['number_err']; ?></span>
</div>
<div class="mb-3 form-floating">
    <input id="neighborhood" type="text" name="neighborhood" class="form-control <?php echo (!empty($data['neighborhood_err'])) ? 'is-invalid' : '';?>" placeholder="Bairro" value="<?php echo $data['neighborhood']; ?>">
    <label for="neighborhood">Bairro</label>
    <span class="invalid-feedback"><?php echo $data['neighborhood_err']; ?></span>
</div>
<div class="mb-3 form-floating">
    <input id="city" type="text" name="city" class="form-control <?php echo (!empty($data['city_err'])) ? 'is-invalid' : '';?>" placeholder="Cidade" value="<?php echo $data['city']; ?>">
    <label for="city">Cidade</label>
    <span class="invalid-feedback"><?php echo $data['city_err']; ?></span>
</div>
<div class="mb-3 form-floating">
    <input id="state" type="text" name="state" class="form-control <?php echo (!empty($data['state_err'])) ? 'is-invalid' : '';?>" placeholder="Estado" value="<?php echo $data['state']; ?>">
    <label for="state">Estado</label>
    <span class="invalid-feedback"><?php echo $data['state_err']; ?></span>
</div>
<div class="mb-3 form-floating">
    <input id="country" type="text" name="country" class="form-control <?php echo (!empty($data['country_err'])) ? 'is-invalid' : '';?>" placeholder="País" value="<?php echo $data['country']; ?>">
    <label for="country">País</label>
    <span class="invalid-feedback"><?php echo $data['country_err']; ?></span>
</div>