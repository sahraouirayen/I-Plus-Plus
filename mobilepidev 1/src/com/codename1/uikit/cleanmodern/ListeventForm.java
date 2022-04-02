/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.codename1.uikit.cleanmodern;

import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.ui.Button;
import com.codename1.ui.Calendar;
import com.codename1.ui.CheckBox;
import com.codename1.ui.Display;
import com.codename1.ui.FontImage;
import static com.codename1.ui.FontImage.MATERIAL_ARROW_BACK;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.spinner.Picker;
import com.codename1.ui.table.TableLayout;
import com.codename1.uikit.cleanmodern.utils.Statics;
import java.io.IOException;
import java.util.List;
import java.util.Map;
import com.codename1.ui.util.Resources;
import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.Date;



/**
 *
 * @author karim
 */
public class ListeventForm extends Form {
    
    private ConnectionRequest req = new ConnectionRequest();
    String json;
    
    public ListeventForm(Resources res) {
        super("Admin Space", new TableLayout(10, 3));
        Toolbar tb = new Toolbar(true);
        setToolbar(tb);
        
        tb.setTitle("Admin Space");
        tb.showToolbar();
        setTitle("List event");
        String url = Statics.BASE_URL + "evenement";
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                json = new String(req.getResponseData());
                int json1 = req.getResponseData().length;
                JSONParser j = new JSONParser();
                
                System.out.println("Daaaaaaaaaaaaaaataaaaaaaaaa" + json);
                //  try {
                Map<String, Object> events;
                try {
                    events = j.parseJSON(new CharArrayReader(json.toCharArray()));
                    List<Map<String, Object>> list = (List<Map<String, Object>>) events.get("root");
                    System.out.println("Daaaaaaaaaaaaaaataaaaaaaaaa" + list.get(0));
                    for (Map<String, Object> l : list) {
                        Label nomEvent = new Label((String) l.get("nom_event"));
                        Label lieu = new Label((String) l.get("lieu "));
                        Button modifier = new Button("Modifier");
                        
                        add(nomEvent);
                        add(lieu);
                        add(modifier);
                        
                        modifier.addActionListener(e -> {
                            
                            try {
                                new ModifEvent(res,l).show();
                            } catch (ParseException ex) {
                                System.out.println(ex.getMessage());                            }
                        });
                        
                    }
                    
                } catch (IOException ex) {
                }
                
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e -> new HomeForm(res).show());
    }
    
}
