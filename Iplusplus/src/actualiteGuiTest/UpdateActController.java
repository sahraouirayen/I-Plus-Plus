/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package actualiteGuiTest;

import java.net.URL;
import java.util.ResourceBundle;
import javaServices.actualiteCRUD;
import javaentity.actualite;
import javafx.event.ActionEvent;
import javafx.fxml.Initializable;
import javafx.fxml.FXML;
import javafx.scene.control.Button;
import javafx.scene.control.TextField;

/**
 * FXML Controller class
 *
 * @author sahra
 */
public class UpdateActController implements Initializable {
    @FXML
    private TextField tftitre;

    @FXML
    private TextField tfdescription;

    @FXML
    private TextField tfetendu;

    @FXML
    private TextField tfimage;

    @FXML
    private TextField tfrating;

    @FXML
    private TextField tfvu;

    @FXML
    private Button btnmodifier;

    @FXML
    private TextField tfid;

    

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }   
    
    @FXML
    void updateact(ActionEvent event) {
        
        int ID =Integer.parseInt(tfid.getText());
        String Titre = tftitre.getText();
         String Description =tfdescription.getText();
         String Etendu = tfetendu.getText();
         String image = tfimage.getText();
         int rating = Integer.parseInt(tfrating.getText());
         int vu = Integer.parseInt(tfvu.getText());
         
         actualite a = new actualite(Titre,Description,Etendu,image,rating,vu);
         actualiteCRUD ac = new actualiteCRUD();
         ac.UpdateActualite(a,ID);
    }

    
}
