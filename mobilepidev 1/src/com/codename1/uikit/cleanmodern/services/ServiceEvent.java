/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.codename1.uikit.cleanmodern.services;

import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.ui.Dialog;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.util.Resources;
import com.codename1.uikit.cleanmodern.EvenetsForm;
import com.codename1.uikit.cleanmodern.ListeventForm;
import com.codename1.uikit.cleanmodern.utils.Statics;

import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

/**
 *
 * @author bhk
 */
public class ServiceEvent {

    public static ServiceEvent instance = null;
    public boolean resultOK;
    private ConnectionRequest req;
    private Resources res;

    private ServiceEvent() {
        req = new ConnectionRequest();
    }

    public static ServiceEvent getInstance() {
        if (instance == null) {
            instance = new ServiceEvent();
        }
        return instance;
    }

    public boolean addEvent(String nomEvent, String date, String lieu, String desc, String type) {
        System.out.println("********");
        //String url = Statics.BASE_URL + "create?name=" + t.getName() + "&status=" + t.getStatus();
        String url = Statics.BASE_URL + "addevent";

        req.setUrl(url);
        req.setPost(false);
        req.addArgument("nom_event", nomEvent);
        req.addArgument("date", date);
        req.addArgument("lieu", lieu);
        req.addArgument("desc_event", desc);
        req.addArgument("type", type);

        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                if (resultOK) {
                    Dialog.show("sucess", "evenement ajoutée", null, "OK");
                }
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }

    public boolean modifEvent(String id, String nomEvent, String date, String lieu, String desc, String type) {
        System.out.println("********");
        String url = Statics.BASE_URL + "modifevent";

        req.setUrl(url);
        req.setPost(false);
        req.addArgument("nom_event", nomEvent);
        req.addArgument("id", id);
        req.addArgument("date", date);
        req.addArgument("lieu", lieu);
        req.addArgument("desc_event", desc);
        req.addArgument("type", type);

        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                if (resultOK || req.getResponseCode() == 202) {
                    Dialog.show("sucess", "evenement modifié", null, "OK");
                    new ListeventForm(res).show();

                }
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }

    public boolean supprimerEvent(String id) {
        System.out.println("********");
        String url = Statics.BASE_URL + "deleteevent";

        req.setUrl(url);
        req.setPost(false);
        req.addArgument("id_event", id);

        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                if (resultOK || req.getResponseCode() == 202) {
                    Dialog.show("sucess", "evenement supprimé", null, "OK");
                    new ListeventForm(res).show();
                }
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }
        public boolean reservation(String id,String iduser) {
        System.out.println("********");
        String url = Statics.BASE_URL + "reservation/"+id+"/"+iduser+"";

        req.setUrl(url);
        req.setPost(false);
       

        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                if (resultOK || req.getResponseCode() == 202) {
                    Dialog.show("sucess", "reservé avec success", null, "OK");
                }
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }

}
