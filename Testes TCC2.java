//Realizar Cadastro
@Test
public void validarCadastro()
{
    LoginView login = new LoginView(driver);

    login.Register()
        .setUser("Rafael Davidoski");
        .setEmail("rafadavidoski@live.com");
        .setPassword("adminutfpr");
        .setPasswordConfirm("adminutfpr");
        .confirmUser();

    String user = login.user();
    assertEquals(user, "Rafael Davidoski");

},

//Realizar Login

@Test
public void validarLogin()
{
    LoginView login = new LoginView(driver);

        .setEmail("rafadavidoski@live.com");
        .setPassword("adminutfpr");
        .Login();

    String user = login.user();
    assertEquals(user, "Rafael Davidoski");
    
}

//Cadastro de um Imovel

@Test
public void validarCadastroImovel()
{
    LoginView login = new LoginView(driver);

        .setEmail("rafadavidoski@live.com");
        .setPassword("adminutfpr");
        .Login();

    CadastrarImovel imovel = login.getMenu().goToCadastrarImovel();

    imovel.setNomeImovel("República 70");
    imovel.setTipoImovel("Republica");
    imovel.setTelefoneImovel("43999104188");
    imovel.setEnderecoImovel("Alameda das Sopinhas 348, Centro");
    imovel.setDescricaoImovel("Republica Organizada, Ambiente Familiar");
    imovel.setValorImovel("450.00");
    imovel.setnBanheiroImovel("1");
    imovel.setnQuartoImovel("1");
    imovel.setnGaragemImovel("1");
    imovel.fotos();
    imovel.Button();

    String validar = imovel.validar();
    assertEquals(user, "Republica 70");    
}

//Imoveis Campos Requeridos 
public void validarObrigatoriedadeCampo()
{
    LoginView login = new LoginView(driver);

        .setEmail("rafadavidoski@live.com");
        .setPassword("adminutfpr");
        .Login();

    CadastrarImovel imovel = login.getMenu().goToCadastrarImovel();

    imovel.setNomeImovel("");
    imovel.setTipoImovel("Pensionato");
    imovel.setTelefoneImovel("4399554499");
    imovel.setEnderecoImovel("Rua Goiás 777");
    imovel.setDescricaoImovel("");
    imovel.setValorImovel("650.00");
    imovel.setnBanheiroImovel("1");
    imovel.setnQuartoImovel("1");
    imovel.setnGaragemImovel("1");
    imovel.fotos();
    imovel.Button();

    String validar = imovel.validar();
    assertEquals(nomeImovel, "The nome imovel field is required. ");
}

// Exclusão de um Locador

public void validarEdicaoLocador()
{
    LoginView login = new LoginView(driver);

        .setEmail("rafadavidoski@live.com");
        .setPassword("adminutfpr");
        .Login();
        
    EdicaoLocador locador = login.getMenu().goToCadastrarLocador();

    locador.Button(btnEditar)
}

