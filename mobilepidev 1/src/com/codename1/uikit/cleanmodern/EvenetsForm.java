package com.codename1.uikit.cleanmodern;

import com.codename1.components.ScaleImageLabel;
import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.ui.Button;
import com.codename1.ui.CheckBox;
import com.codename1.ui.Command;
import com.codename1.ui.Component;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.layouts.LayeredLayout;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.table.TableLayout;
import com.codename1.ui.util.Resources;
import com.codename1.uikit.cleanmodern.services.ServiceEvent;
import com.codename1.uikit.cleanmodern.services.ServiceUser;
import com.codename1.uikit.cleanmodern.utils.SessionManager;
import com.codename1.uikit.cleanmodern.utils.Statics;
import java.io.IOException;
import java.util.List;
import java.util.Map;

/**
 * The user profile form
 *
 * @author Shai Almog
 */
public class EvenetsForm extends BaseForm {

    private ConnectionRequest req = new ConnectionRequest();
    String json;

    public EvenetsForm(Resources res) {

        super("Newsfeed", new TableLayout(12, 3));
        Toolbar tb = new Toolbar(true);
        setToolbar(tb);
        tb.setTitle("Evenements");
        tb.showToolbar();
        /* getTitleArea().setUIID("Container");
        setTitle("Evenements");
        getContentPane().setScrollVisible(false);*/

        super.addSideMenu(res);

        tb.addSearchCommand(e -> {
        });

        String url = Statics.BASE_URL + "evenement";
        req.setUrl(url);
        req.setPost(false);
        addComponent(new Label("Evenements"));
        addComponent(new Label("Lieu"));
        addComponent(new Label("Details"));

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
                        Button details = new Button("Details");

                        add(nomEvent);
                        add(lieu);
                        add(details);

                        details.addActionListener(e -> {

                            Form hi = new Form((String) l.get("nom_event"), new TableLayout(12, 2));
                            Toolbar tb1 = new Toolbar(true);
                            setToolbar(tb1);
                            tb1.setTitle((String) l.get("nom_event"));
                            Label nomEv = new Label("Nom de l'evenement");
                            Label lieuEv = new Label("Lieu de l'venement");
                            Label descEv = new Label("Description de l'evenement");
                            Label typeEv = new Label("Type de l'evenement");
                            Button participer = new Button("Participer");
                            Button retour = new Button("Retourner");
                            retour.addActionListener(v -> new EvenetsForm(res).show());
                            float id = Float.parseFloat(l.get("id_event").toString());
                            int eventid = (int) id;
                            String nom_event = (String) l.get("nom_event");
                            String lieuD = (String) l.get("lieu ");
                            String desc_event = (String) l.get("desc_event");
                            String type = (String) l.get("type");
                            participer.addActionListener(b -> {
                                ServiceEvent.getInstance().reservation(String.valueOf(eventid), String.valueOf(SessionManager.getId()));
                            });
                            hi.add(nomEv);
                            hi.add(new Label(nom_event));
                            hi.add(lieuEv);
                            hi.add(new Label(lieuD));
                            hi.add(descEv);
                            hi.add(new Label(desc_event));
                            hi.add(typeEv);
                            hi.add(new Label(type));
                            hi.add(participer);
                            hi.add(retour);

                            hi.show();
                        });

                    }

                } catch (IOException ex) {
                }

            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);

    }

    private void addStringValue(String s, Component v) {
        add(BorderLayout.west(new Label(s, "PaddedLabel")).
                add(BorderLayout.CENTER, v));
        add(createLineSeparator(0xeeeeee));
    }
}
