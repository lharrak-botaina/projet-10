<?php
class GestionEmployes{
    private $Connection = Null;

    private function getConnection(){
        if(is_null($this->Connection)){
            $this->Connection = mysqli_connect('localhost', 'boutaina', 'test123', 'employees_db');
            // Vérifier l'ouverture de la connexion avec la base de données
            if(!$this->Connection){
                $message =  'Erreur de connexion: ' . mysqli_connect_error(); 
                throw new Exception($message); 
            }
        }
        
        return $this->Connection;
        
    }
    

    public function Ajouter($employe){

        $nom = $employe->getNom();
        $prenom = $employe->getPrenom();
        $dateNaissance = $employe->getDateNaissance();
        // requête SQL
        $sql = "INSERT INTO employees(first_name, last_name, date_naissance) 
                                VALUES( '$prenom','$nom', '$dateNaissance')";
        
        mysqli_query($this->getConnection(), $sql);
        }
        
        
        
        public function RechercherTous(){
        $sql = 'SELECT Id, first_name, last_name, date_naissance FROM employees';
        $query = mysqli_query($this->getConnection() ,$sql);
        $employes_data = mysqli_fetch_all($query, MYSQLI_ASSOC);
        
        $employes = array();
        foreach ($employes_data as $employe_data) {
            $employe = new Employe();
            $employe->setId($employe_data['Id']);
            $employe->setPrenom ($employe_data['first_name']);
            $employe->setNom($employe_data['last_name']);
            $employe->setDateNaissance ($employe_data['date_naissance']);
            array_push($employes, $employe);
        }
        return $employes;
        }
        
        
        
        
    
};
?>
