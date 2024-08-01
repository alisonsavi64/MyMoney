FROM node:16

WORKDIR /app

COPY ./package*.json /app/

RUN npm install

COPY . /app

RUN npm install -g expo-cli
RUN npm install @expo/config@8.1.1
RUN npm install @expo/metro-config@0.10.0
 
EXPOSE 19000
EXPOSE 19001
EXPOSE 19002

CMD ["npx", "expo", "start", "--host", "0.0.0.0"]
