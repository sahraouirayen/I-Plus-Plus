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
import java.io.IOException;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.application.Application;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.stage.Stage;
import javafx.scene.control.Button;
import javafx.scene.control.TextField;
import javafx.fxml.FXMLLoader;


/**
 * FXML Controller class
 *
 * @author sahra
 */
public class AddactController implements Initializable {
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
    private Button btnajouter;
 /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    
    @FXML
    void ajoutactualite(ActionEvent event) {
     try {
         String Titre = tftitre.getText();
         String Description =tfdescription.getText();
         String Etendu = tfetendu.getText();
         String image = tfimage.getText();
         int rating = Integer.parseInt(tfrating.getText());
         int vu = Integer.parseInt(tfvu.getText());
         
         actualite a = new actualite(Titre,Description,Etendu,image,rating,vu);
         actualiteCRUD ac = new actualiteCRUD();
         ac.ajoutactualite2(a);
         
         FXMLLoader loader = new FXMLLoader(getClass().getResource("/actualiteGuiTest/ShowAct.fxml"));
         Parent root = loader.load();
         ShowActController sac = loader.getController();
         sac.settftitre(a.getTitre_actualite());
         sac.settfdescription(a.getDescription());
         sac.settfetendu(a.getEtendu());
         sac.setttfimage(a.getImage_act());
         sac.settfrating(""+a.getRating_act());
         sac.settfvu(""+a.getVu());
         tftitre.getScene().setRoot(root);
         
     } catch (IOException ex) {
System.out.println(ex.getMessage());     }
         

    }

   
   
    
}
