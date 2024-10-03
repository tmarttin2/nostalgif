<?php include("header.php") ?>

    <div class="container-fluid text-center">

        <h2>Cadastro de Usuário:</h2>

        <div class="d-flex justify-content-center mb-3">

            <div class="row">

                <div class="col-sm-12">

                    <form action="actionUsuario.php" class="was-validated" method="POST" enctype="multipart/form-data">

                        <div class="form-floating mb-3 mt-3">
                            <input type="file" class="form-control" id="fotoUsuario" name="fotoUsuario" required>
                            <label for="fotoUsuario" class="form-label">Foto:</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" id="nomeUsuario" placeholder="Informe o seu nome" name="nomeUsuario" required>
                            <label for="nomeUsuario" class="form-label">Nome:</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-floating mb-3 mt-3">
                            <select class="form-select" id="campusUsuario" name="campusUsuario" required>
                                <option value="Arapongas">Arapongas</option>
                                <option value="Assis Chateaubriand">Assis Chateaubriand</option>
                                <option value="Astorga">Astorga</option>
                                <option value="Barracão">Barracão</option>
                                <option value="Campo Largo">Campo Largo</option>
                                <option value="Capanema">Capanema</option>
                                <option value="Cascavel">Cascavel</option>
                                <option value="Colombo">Colombo</option>
                                <option value="Coronel Vivida">Coronel Vivida</option>
                                <option value="Curitiba">Curitiba</option>
                                <option value="Foz do Iguaçu">Foz do Iguaçu</option>
                                <option value="Goioerê">Goioerê</option>
                                <option value="Irati">Irati</option>
                                <option value="Ivaiporã">Ivaiporã</option>
                                <option value="Jacarezinho">Jacarezinho</option>
                                <option value="Jaguariaíva">Jaguariaíva</option>
                                <option value="Londrina">Londrina</option>
                                <option value="Palmas">Palmas</option>
                                <option value="Paranaguá">Paranaguá</option>
                                <option value="Paranavaí">Paranavaí</option>
                                <option value="Pinhais">Pinhais</option>
                                <option value="Pitanga">Pitanga</option>
                                <option value="Quedas do Iguaçu">Quedas do Iguaçu</option>
                                <option value="Telemaco Borba">Telêmaco Borba</option>
                                <option value="Umuarama">Umuarama</option>
                                <option value="União da Vitória">União da Vitória</option>
                            </select>
                            <label for="campusUsuario" class="form-label">CAMPUS:</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control" id="telefoneUsuario" placeholder="Informe o seu telefone" name="telefoneUsuario" required>
                            <label for="telefoneUsuario" class="form-label">Telefone:</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-floating mb-3 mt-3">
                            <input type="email" class="form-control" id="emailUsuario" placeholder="Informe o seu email" name="emailUsuario" required>
                            <label for="emailUsuario" class="form-label">Email:</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-floating mb-3 mt-3">
                            <input type="password" class="form-control" id="senhaUsuario" placeholder="Informe uma senha" name="senhaUsuario" required>
                            <label for="senhaUsuario" class="form-label">Senha:</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-floating mb-3 mt-3">
                            <input type="password" class="form-control" id="confirmarSenhaUsuario" placeholder="Confirme a senha" name="confirmarSenhaUsuario" required>
                            <label for="confirmarSenhaUsuario" class="form-label">Confirme a Senha:</label>
                            <div class="valid-feedback"></div>
                            <div class="invalid-feedback"></div>
                        </div>

                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <br>
       
    </div>

<?php include("footer.php") ?>