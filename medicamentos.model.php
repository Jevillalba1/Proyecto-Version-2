<?php
class MedicamentosModel
{
    private $pdo;
    public function __CONSTRUCT()
    {
        try
        {
            $this->pdo = new PDO('mysql:host=localhost;dbname=proyecto', 'root', '');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);                
        }
        catch(Exception $e)
        {
            echo 'Lo sentimos ocurrio un error al conectar con la base de datos: ' . $e->getMessage();
        }
    }
    public function Listar()
    {
        try
        {
            $result = array();
            $stm = $this->pdo->prepare("SELECT * FROM medicamentos");
            $stm->execute();

            foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
            {
                $alm = new Medicamentos();
                $alm->__SET('Id', $r->Id);
                $alm->__SET('Nombre', $r->Nombre);
                $alm->__SET('Tipo', $r->Tipo);
                $alm->__SET('Via_Consumo', $r->Via_Consumo);
                $alm->__SET('Precio_Unitario', $r->Precio_Unitario);
                $alm->__SET('Cantidad', $r->Cantidad);
                $alm->__SET('Ubicacion', $r->Ubicacion);

                $result[] = $alm;
            }

            return $result;
        }
        catch(Exception $e)
        {
            die($e->getMessage());
        }
    }
    public function Obtener($Id)
    {
        try 
        {
            $stm = $this->pdo
                      ->prepare("SELECT * FROM medicamentos WHERE Id = ?");               
            $stm->execute(array($Id));
            $r = $stm->fetch(PDO::FETCH_OBJ);

            $alm = new Medicamentos();
                $alm->__SET('Id', $r->Id);
                $alm->__SET('Nombre', $r->Nombre);
                $alm->__SET('Tipo', $r->Tipo);
                $alm->__SET('Via_Consumo', $r->Via_Consumo);
                $alm->__SET('Precio_Unitario', $r->Precio_Unitario);
                $alm->__SET('Cantidad', $r->Cantidad);
                $alm->__SET('Ubicacion', $r->Ubicacion);


            return $alm;
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Eliminar($Id)
    {
        try 
        {
            $stm = $this->pdo
                      ->prepare("DELETE FROM medicamentos WHERE Id = ?");                      

            $stm->execute(array($Id));
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }
    public function Actualizar(Medicamentos $data)
    {
        try 
        {
            $sql = "UPDATE medicamentos SET 
                        Nombre          	= ?, 
                        Tipo            	= ?,
                        Via_Consumo    		= ?, 
                        Precio_Unitario     = ?,
                        Cantidad          	= ?,
                        Ubicacion      		= ?
                    WHERE Id = ?";

            $this->pdo->prepare($sql)
                 ->execute(
                array(
                    $data->__GET('Nombre'), 
                    $data->__GET('Tipo'), 
                    $data->__GET('Via_Consumo'),
                    $data->__GET('Precio_Unitario'),
                    $data->__GET('Cantidad'),
                    $data->__GET('Ubicacion'),
                    $data->__GET('Id')
                    )                    
                );
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Registrar(Medicamentos $data)
    {
        try 
        {

        $sql = "INSERT INTO medicamentos (Id,Nombre,Tipo,Via_Consumo,Precio_Unitario,Cantidad,Ubicacion) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";

        $this->pdo->prepare($sql)
             ->execute(
            array(
                $data->__GET('Id'),
                $data->__GET('Nombre'), 
                $data->__GET('Tipo'), 
                $data->__GET('Via_Consumo'),
                $data->__GET('Precio_Unitario'),
                $data->__GET('Cantidad'),
                $data->__GET('Ubicacion')
                )
            );
        } catch (Exception $e) 
        {
            
            die($e->getMessage());
        }
    }
}
?>