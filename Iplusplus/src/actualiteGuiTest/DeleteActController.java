/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package actualiteGuiTest;

import java.net.URL;
import java.util.ResourceBundle;
import javaServices.actualiteCRUD;
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
public class DeleteActController implements Initializable {

      @FXML
    private TextField tfid;

    @FXML
    private Button btndelete;

  

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    
      @FXML
    void DeleteAct(ActionEvent event) {
         int ID =Integer.parseInt(tfid.getText());
          actualiteCRUD ac = new actualiteCRUD();
         ac.DeleteActualite(ID);
         
        

    }
    
}
