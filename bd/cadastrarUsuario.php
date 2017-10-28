<?php  
	$dbname = "id3284797_login";
	$usuario="id3284797_easyshoes";
	$senha = "123456";
	try {
	  	$conn = new PDO("mysql:host=localhost;dbname=$dbname", $usuario, $senha);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}

	$nome = $_POST["nome_da_empresa"];
	$cpf = $_POST["cpf"];
	$telefone = $_POST["telefone_da_empresa"];
	$cnpj = $_POST["cnpj_da_empresa"];
	$logradouro = $_POST["logradouro_da_empresa"];
	$email = $_POST["email_da_empresa"];
	$login = $_POST["login_da_empresa"];
	$senha = $_POST["senha_da_empresa"];

	$sql = "INSERT INTO usuarios(USER_NOME,USER_CPF,USER_TELEFONE,USER_CNPJ,USER_LOGRADOURO,USER_EMAIL,USER_LOGIN,USER_SENHA) 
		VALUES(:nome, :cpf, :telefone, :email, :login, :senha)";
	$stmt = $conn->prepare( $sql );
	$stmt->bindParam( ':nome', $nome );
	$stmt->bindParam( ':cpf', $cpf );
	$stmt->bindParam( ':telefone',$telefone );
	$stmt->bindParam( ':email', $email);
	$stmt->bindParam( ':login', $login);
	$stmt->bindParam( ':senha', $senha);

	$result = $stmt->execute();

	if ( ! $result ){
	    var_dump( $stmt->errorInfo() );
	    exit;
	}	  
	header("location: ../login.php");
?>