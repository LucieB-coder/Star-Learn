# Traitement des valeurs manquantes
import pandas as pd
import numpy as np
from imblearn.under_sampling import RandomUnderSampler
from collections import Counter
from sklearn.model_selection import train_test_split

# Charger le fichier CSV dans un dataframe

df = pd.read_csv('starlearn-main/File/exoplanets.csv')


#  On traite les valeurs manquantes et les colonnes inutiles
df.dropna( how='all', axis=1, inplace=True)  # On supprime les colonnes contenant que des valeurs manquantes
df.drop(columns=["kepid","kepoi_name","kepler_name", "koi_pdisposition","koi_tce_delivname"], inplace=True) # On supprime les colonnes inutiles

df.dropna(inplace=True) # On supprime les lignes contenant des valeurs manquantes


### Traitement des données 
# On transforme les valeurs de la colonne koi_disposition en entier
df["koi_disposition"] = df["koi_disposition"].map(
    {"CONFIRMED": 1, "FALSE POSITIVE": 0, "CANDIDATE": 2}
)

# Normalisation des données avec MinMax
for i in df.columns :
    if i not in ["koi_disposition", "koi_fpflag_nt", "koi_fpflag_ss", "koi_fpflag_co", "koi_fpflag_ec"]:
        df[i] = MinMaxScaler().fit_transform(df[i].values.reshape(-1,1))


for i in df.columns :
    print(i)
    # print(df[i])
    if df[i].dtype == "float64" :
        print("Min : ", df[i].min())
        print("Max : ", df[i].max())
        print("Moyenne : ", df[i].mean())
        print("1er quartile : ", df[i].quantile(0.25))
        print("Médiane : ", df[i].median())
        print("3ème quartile : ", df[i].quantile(0.75))
    else :
        print("### Pas un float ###")
    print()




# Echantillonnage dans le cas de classes déséquilibrées
data_majority = data[data["class"] == "majority"]
data_minority = data[data["class"] == "minority"]
data_minority_upsampled = resample(data_minority, replace=True, n_samples=len(data_majority), random_state=123)
data = pd.concat([data_majority, data_minority_upsampled])

# Normalisation des données (MinMax ou standardisation)
scaler = MinMaxScaler() # ou scaler = StandardScaler()
data_scaled = scaler.fit_transform(data)

# Numérisation des colonnes
le = LabelEncoder()
data["column"] = le.fit_transform(data["column"])

# Traduction des données
def translate_language(row):
    try:
        lang = detect(row["text"])
        if lang != "en":
            row["text"] = translate_function(row["text"], lang)
            return row
    except:
            return row

data = data.apply(translate_language, axis=1)


# Diviser le dataset en training en test set
X = df.drop('koi_disposition', axis=1)
y = df['koi_disposition']
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=0)

# Echantillonnage dans le cas de classes déséquilibrées (undersampling)
print("Nombre d'occurence dans chaque classe (avant undersampling): ", sorted(Counter(y_train).items()))
# Randomly under sample the majority class
rus = RandomUnderSampler(random_state=42)
X_train_rus, y_train_rus= rus.fit_resample(X_train, y_train)
# Check the number of records after under sampling
print("Nombre d'occurence dans chaque classe (après undersampling): ", sorted(Counter(y_train_rus).items()))
print(X_train_rus,y_train_rus)

datasetFinal = X_train_rus
datasetFinal['koi_disposition'] = y_train_rus
# Mélanger les lignes
datasetFinal = datasetFinal.sample(frac=1, random_state=np.random.seed(42))
print(datasetFinal)

# Exporter le nouveau dataset au format csv
datasetFinal.to_csv('exoplanetsExo1.csv', index=False)