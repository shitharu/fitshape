import tensorflow as tf
import numpy as np
from tensorflow.keras.preprocessing import image
import sys

# Load the trained model
model = tf.keras.models.load_model('image_prediction_part//fitshapelk.h5')

# Load and preprocess the uploaded image
img_path = sys.argv[1]
img = image.load_img(img_path, target_size=(224, 224))
x = image.img_to_array(img)
x = np.expand_dims(x, axis=0)
x = x / 255.0

# Make predictions on the image
preds = model.predict(x)
pred_class = np.argmax(preds)

# Print the predicted class
classes = ['hourglass', 'inverted triangle', 'pear', 'rectangle', 'spoon']
print(classes[pred_class])

