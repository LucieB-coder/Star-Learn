import pandas as pd
import pickle
from sklearn.decomposition import PCA
from sklearn.preprocessing import MinMaxScaler
import pandas as pd
import sys

# print("coucou")
data = sys.argv[1:]


# data = [
#      "0.99", "0", "0", "0", "0", "9.488035", "0.000116", "-0.000116", "170.538750", "0.003520", "-0.003520", "0.146", "0.305", "-0.077", "2.957500", "0.059500", "-0.059500", "615.80", "22.41", "-15.75", "1.24", "0.34", "-0.23", "793", "93.59", "29.45", "-17.65", "35.8", "1", "5455", "81", "-81", "4.467", "0.064", "-0.096", "0.927", "0.105", "-0.061", "0.105", "-0.061", "15.347",
# ]  

data = [float(i) for i in data]
data = pd.DataFrame([data])




##### Pour le MinMaxScaler
with open ('/var/www/html/starlearn/SiteWeb/ia/minMaxScaler.pkl', 'rb') as f:
    scaler = pickle.load(f)

cols_to_scale = data.drop(["1", "2", "3", "4"], axis=1).columns

data[cols_to_scale] = scaler.transform(data[cols_to_scale].values.reshape(-1,1))





     
# Load des modèles entrainés
with open ('/var/www/html/starlearn/SiteWeb/ia/knn.pkl', 'rb') as f:
    knn = pickle.load(f)
with open ('/var/www/html/starlearn/SiteWeb/ia/rfc.pkl', 'rb') as f:
    rfc = pickle.load(f)
with open ('/var/www/html/starlearn/SiteWeb/ia/svm.pkl', 'rb') as f:
    svm = pickle.load(f)



dataPCA = pd.read_csv("/var/www/html/starlearn/SiteWeb/ia/exoplanetsExo1.csv")
dataT = dataPCA.drop("koi_disposition", axis=1)
# Appliquer une réduction de dimension avec PCA
pca = PCA(n_components=25)
pca.fit(dataT)
data_pca = pca.transform(data)
data_pca = pd.DataFrame(data_pca, columns=[ str(i) for i in range(25) ])

# Classification avec les trois modèles
y_pred_kppv = knn.predict(data_pca)
y_pred_rfc = rfc.predict(data_pca)
y_pred_svm = svm.predict(data_pca)

# Conversion des résultats et transmition des résultats au fichier index.php
d={0:"FALSE_POSITIVE", 1:"CONFIRMED", 2:"CANDIDATE"}
print(d[y_pred_kppv[0]])
print(d[y_pred_rfc[0]])
print(d[y_pred_svm[0]])