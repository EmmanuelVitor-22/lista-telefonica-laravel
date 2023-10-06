<div class="container mt-5">
    <div class="jumbotron">
        <h1 class="display-4"><?= isset($contact) ? "Atualizar Contato: " . $contact->getName() : "Criar Contato" ?></h1>
    </div>
    <form method="post" action="/save-contact<?= isset($contact) ? '?id=' . $contact->getId() : ''; ?>">
        <input type="hidden" name="id" value="<?= isset($contact) ? $contact->getId() : ''; ?>">

        <div class="row">
            <div class="col-md-6">
                <h2>Informações de Contato</h2>
                <div class="form-group">
                    <label for="name">Nome:</label>
                    <input type="text" class="form-control" name="nome"
                           value="<?php echo isset($contact) ? $contact->getName() : ''; ?>" required
                           placeholder="Digite o Nome">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email"
                           value="<?php echo isset($contact) ? $contact->getEmail() : ''; ?>" required
                           placeholder="Digite o Email">
                </div>
            </div>

            <div class="col-md-6">
                <h2>Informações de Endereço</h2>
                <div class="form-group">
                    <label for="street">Rua:</label>
                    <input type="text" class="form-control" name="rua"
                           value="<?php echo isset($contact) ? $contact->getAddress()->getStreet() : ''; ?>" required
                           placeholder="Digite a Rua">
                </div>
                <div class="form-group">
                    <label for="numberHome">Número da Casa:</label>
                    <input type="text" class="form-control" name="numero_casa"
                           value="<?php echo isset($contact) ? $contact->getAddress()->getHomeNumber() : ''; ?>"
                           required placeholder="Digite o Número da Casa">
                </div>
                <div class="form-group">
                    <label for="complement">Complemento:</label>
                    <input type="text" class="form-control" name="complemento"
                           value="<?php echo isset($contact) ? $contact->getAddress()->getComplement() : ''; ?>"
                           placeholder="Digite o Complemento">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="zipCode">CEP:</label>
                        <input type="text" class="form-control" name="cep"
                               value="<?php echo isset($contact) ? $contact->getAddress()->getZipCode() : ''; ?>"
                               required placeholder="Digite o CEP">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="city">Cidade:</label>
                        <input type="text" class="form-control" name="cidade"
                               value="<?php echo isset($contact) ? $contact->getAddress()->getCity() : ''; ?>" required
                               placeholder="Digite a Cidade">
                    </div>
                </div>
                <div class="form-group">
                    <label for="state">Estado (sigla com 2 letras):</label>
                    <input type="text" class="form-control" name="estado" maxlength="2"
                           value="<?php echo isset($contact) ? $contact->getAddress()->getState() : ''; ?>" required
                           placeholder="Digite o Estado (sigla com 2 letras)">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <h2>Telefone 1</h2>
                <div class="form-group">
                    <label for="areaCode1">Código de Área:</label>
                    <input type="text" class="form-control" id="areaCode1" name="areaCode1"
                           value="<?php echo isset($contact) ? $contact->getPhones()[0]->getAreaCode() : ''; ?>"
                           placeholder="Digite o Código de Área">
                </div>
                <div class="form-group">
                    <label for="phoneNumber1">Número de Telefone:</label>
                    <input type="text" class="form-control" id="phoneNumber1" name="phoneNumber1"
                           value="<?php echo isset($contact) ? $contact->getPhones()[0]->getNumber() : ''; ?>"
                           placeholder="Digite o Número de Telefone">
                </div>
            </div>

            <div class="col-md-6">
                <h2>Telefone 2</h2>
                <div class="form-group">
                    <label for="areaCode2">Código de Área:</label>
                    <input type="text" class="form-control" id="areaCode2" name="areaCode2"
                           value="<?php echo isset($contact) ? $contact->getPhones()[1]->getAreaCode() : ''; ?>"
                           placeholder="Digite o Código de Área">
                </div>
                <div class="form-group">
                    <label for="phoneNumber2">Número de Telefone:</label>
                    <input type="text" class="form-control" id="phoneNumber2" name="phoneNumber2"
                           value="<?php echo isset($contact) ? $contact->getPhones()[1]->getNumber() : ''; ?>"
                           placeholder="Digite o Número de Telefone">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary btn-lg btn-block">
                    <?php echo isset($_GET['id']) ? 'Atualizar' : 'Registrar'; ?>
                </button>
            </div>
        </div>
    </form>
</div>
