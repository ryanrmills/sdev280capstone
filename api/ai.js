// ai.js
import express from "express";
import { GoogleGenAI } from "@google/genai";
import dotenv from "dotenv";


dotenv.config();

const ai = new GoogleGenAI({ apiKey: process.env.GOOGLE_API_KEY });
const app = express();
app.use(express.json());


let aIcontext = '';

app.post("/ai-context", async (req, res) => {
  try {
    const { context } = req.body;
    aIcontext = "You are a disc golf analytics expert named 'Birdie'. If questions and requests do not relate to disc golf player performance and disc golf analytics, kindly apologize and decline to answer. Be concise and answer a question in 50 words or less, if you can." + context;
  } catch (e){
    return res.status(500).json({ error: e.message });
  }
})

//My next steps would be to limitt the size of the histories list 
//so that the context is not large.
app.post("/ai", async (req, res) => {
  try {
    const histories = [];
    const { prompt } = req.body;

    const modelName = "gemini-2.5-flash";
    
    const chat = ai.chats.create({
      model: modelName,
      history: histories,
      config: {
        systemInstruction: aIcontext
      }
    })

    const response1 = await chat.sendMessage(
      {
        message: prompt
      },
      {
        maxOutputTokens: 200
      }
    )

    let userJsonRes = {role:"user", parts:[{text: prompt}]};
    histories.push(userJsonRes);

    let mlJsonRes = {role:"model", parts:[{text: response1.candidates[0].content.parts[0].text}]};
    histories.push(mlJsonRes);

    return res.json({ summary: response1.text.trim() });
    
  } catch (e) {
    return res.status(500).json({ error: e.message });
  }
});

const port = process.env.AI_PORT || 4000;
app.listen(port, () => console.log(`AI proxy listening on ${port}`));
