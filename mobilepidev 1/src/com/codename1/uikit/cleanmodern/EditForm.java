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
import com.codename1.ui.util.Resources;
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
public class EditForm extends BaseForm {

    private ConnectionRequest req = new ConnectionRequest();
    String json;

    public EditForm(Resources res) {
        super("Newsfeed", BoxLayout.y());
        Toolbar tb = new Toolbar(true);
        setToolbar(tb);
        getTitleArea().setUIID("Container");
        setTitle("Profile");
        getContentPane().setScrollVisible(false);

        super.addSideMenu(res);

        tb.addSearchCommand(e -> {
        });

        String url = Statics.BASE_URL + "give-user";
        req.setUrl(url);
        req.setPost(false);
        req.addArgument("id", String.valueOf(SessionManager.getId()));
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                json = new String(req.getResponseData());
                int json1 = req.getResponseData().length;
                JSONParser j = new JSONParser();
                Image img = res.getImage("profile-background.jpg");
                if (img.getHeight() > Display.getInstance().getDisplayHeight() / 3) {
                    img = img.scaledHeight(Display.getInstance().getDisplayHeight() / 3);
                }
                ScaleImageLabel sl = new ScaleImageLabel(img);
                sl.setUIID("BottomPad");
                sl.setBackgroundType(Style.BACKGROUND_IMAGE_SCALED_FILL);

                add(LayeredLayout.encloseIn(
                        sl,
                        BorderLayout.south(
                                GridLayout.encloseIn(3,
                                        FlowLayout.encloseCenter(
                                                new Label(res.getImage("profile-pic.jpg"), "PictureWhiteBackgrond"))
                                )
                        )
                ));

                System.out.println("Daaaaaaaaaaaaaaataaaaaaaaaa" + json);
                try {
                    Map<String, Object> user = j.parseJSON(new CharArrayReader(json.toCharArray()));
                    List<Map<String, Object>> list = (List<Map<String, Object>>) user.get("root");
                    float userid = Float.parseFloat(user.get("idUser").toString());
                    int id = (int)userid;
                    String usernom = (String) user.get("nom");
                    String userprenom = (String) user.get("prenom");
                    String useremail = (String) user.get("email");
                    String useradresse = (String) user.get("adresse");
                    String useratel = String.valueOf(user.get("numTel"));

                    TextField nom = new TextField(usernom);
                    nom.setUIID("TextFieldBlack");
                    addStringValue("Nom", nom);

                    TextField prenom = new TextField(userprenom);
                    prenom.setUIID("TextFieldBlack");
                    addStringValue("Prenom", prenom);
                    TextField email = new TextField(useremail, "E-Mail", 20, TextField.EMAILADDR);
                    email.setUIID("TextFieldBlack");
                    addStringValue("E-Mail", email);
                    TextField tel = new TextField(useratel);
                    tel.setUIID("TextFieldBlack");
                    addStringValue("Numéro de telephone", tel);

                    TextField adresse = new TextField(useradresse);
                    adresse.setUIID("TextFieldBlack");
                    addStringValue("Adresse", adresse);
                    ;
                    Button edit = new Button("Modifier");
                    edit.addActionListener(e -> {
                        String usern = nom.getText();
                        String userp = prenom.getText();
                        String usere = email.getText();
                        String userad = adresse.getText();
                        String userat = tel.getText();

                        ServiceUser.getInstance().edituser(String.valueOf(id), usern, userp, usere, userat, userad);

                    });
                    add(edit);
                } catch (IOException ex) {
                    System.out.println(ex.getMessage());
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
