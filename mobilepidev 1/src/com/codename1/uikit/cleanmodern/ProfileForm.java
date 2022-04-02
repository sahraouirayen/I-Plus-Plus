/*
 * Copyright (c) 2016, Codename One
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated 
 * documentation files (the "Software"), to deal in the Software without restriction, including without limitation 
 * the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, 
 * and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions 
 * of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, 
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A 
 * PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT 
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF 
 * CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE 
 * OR THE USE OR OTHER DEALINGS IN THE SOFTWARE. 
 */
package com.codename1.uikit.cleanmodern;

import com.codename1.components.ScaleImageLabel;
import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.ui.Button;
import com.codename1.ui.CheckBox;
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
public class ProfileForm extends BaseForm {

    private ConnectionRequest req = new ConnectionRequest();
    String json;

    public ProfileForm(Resources res) {

        super("Newsfeed", BoxLayout.y());
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
                    Label nom = new Label("Votre nom et prénom ");
                    Label email = new Label("Votre email ");
                    Label mdp = new Label("Votre mot de passe ");
                    Label adresse = new Label("Votre adresse ");
                    String usernom = (String) user.get("nom");
                    String userprenom = (String) user.get("prenom");
                    String useremail = (String) user.get("email");
                    String useradresse = (String) user.get("adresse");
                    Container cnt = new Container(new BoxLayout(BoxLayout.X_AXIS));
                    Container cnt1 = new Container(new BoxLayout(BoxLayout.X_AXIS));
                    Container cnt2 = new Container(new BoxLayout(BoxLayout.X_AXIS));
                    Container cnt3 = new Container(new BoxLayout(BoxLayout.X_AXIS));
                    cnt.add(nom);
                    cnt.add(new Label(usernom));
                    cnt.add(new Label(userprenom));
                    cnt1.add(email);
                    cnt1.add(new Label(useremail));
                    cnt3.add(mdp);
                    cnt3.add(new Label("***********"));
                    cnt2.add(adresse);
                    cnt2.add(new Label(useradresse));

                    add(
                            cnt
                    );
                    add(
                            cnt1
                    );
                    add(
                            cnt3
                    );
                    add(
                            cnt2
                    );
                    Button edit = new Button("Modifier Données");
                    edit.addActionListener(e -> new EditForm(res).show());
                    add(edit);
                } catch (IOException ex) {
                    System.out.println(ex.getMessage());
                }

            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        Toolbar tb = new Toolbar(true);
        setToolbar(tb);
        getTitleArea().setUIID("Container");
        setTitle("Profile");
        getContentPane().setScrollVisible(false);

        super.addSideMenu(res);

        tb.addSearchCommand(e -> {
        });

    }

    private void addStringValue(String s, Component v) {
        add(BorderLayout.west(new Label(s, "PaddedLabel")).
                add(BorderLayout.CENTER, v));
        add(createLineSeparator(0xeeeeee));
    }
}
