import pandas as pd
import jolib
import sys
from sklearn.decomposition import PCA

# Load arguments
data = sys.argv[1:]

# Load des modèles entrainés
modele_kppv = jolib.load('./kppv.pkl')
modele_rfc = jolib.load('./rfc.pkl')
modele_svm = jolib.load('./svm.pkl')

# Réduction de dimensions des données entrantes
pca = PCA(n_components=25)
data_pca = pca.fit_transform(data)

# Classification avec les trois modèles
y_pred_kppv = modele_kppv.predict(data_pca)
y_pred_rfc = modele_rfc.predict(data_pca)
y_pred_svm = modele_svm.predict(data_pca)

# Conversion des résultats et transmition des résultats au fichier index.php
d={0:"FALSE_POSITIVE", 1:"CONFIRMED", 2:"CANDIDATE"}
print(d[y_pred_kppv[0]])
print(d[y_pred_rfc[0]])
print(d[y_pred_svm[0]])