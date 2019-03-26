<?php 

class Upload {
  

const _FOLDER_DIR = "uploads/";

 // Variável para guardar o array relacionado ao arquivo.
 public $_file;
 

 // Método construtor que recebe o array com os arquivos via método POST
 // Verifica se já existe diretório, caso ele não exista ele, é criado.
 function __construct($curFile){

 		if(!file_exists(self::_FOLDER_DIR)){
 				mkdir(self::_FOLDER_DIR);
 				}
 		$this->_file = $curFile;
 }
 
   
 function makeUpload(){  //Método para:

 		if(isset($this->_file)){//Verificar se o arquivo existe;
 	
 			$randomName = rand(00,9999); //Setar um nome aleatório para evitar repetição e substiuição de arquivos no servidor;
 			$fileName = self::_FOLDER_DIR . "_" . $randomName . "_" . $this->_file["name"]; //Criar nome de arquivo concatenando o diretório - nome aleatório - nome original do arquivo.

 	if(is_uploaded_file($this->_file["tmp_name"])){ //Verifica se o upload do arquivo foi relizado.

 		if(move_uploaded_file($this->_file["tmp_name"], $fileName)){ //Move o arquivo para o diretório escolhido, inserido na concatenação realizada anteriormente.

 			echo "O upload foi realizado com sucesso!"; //Retorna true em casos de upload com sucesso e false caso ocorra algum erro.
 			return true;
	 }	else{
			echo "Erro, problemas no envio, tente novamente.";
 			return false;
 				}
 			} 
	 	} 
	 }

}
 

?>




